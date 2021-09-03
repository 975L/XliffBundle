<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\XliffBundle\Service;

use c975L\ConfigBundle\Service\ConfigServiceInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpKernel\Kernel;
use Twig\Environment;

class XliffService implements XliffServiceInterface
{
    /**
     * Stores ConfigServiceInterface
     * @var ConfigServiceInterface
     */
    private $configService;

    /**
     * Stores EntityManager
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * Stores Environment
     * @var Environment
     */
    private $environment;

    public function __construct(
        ConfigServiceInterface $configService,
        EntityManagerInterface $em,
        Environment $environment
    ) {
        $this->configService = $configService;
        $this->em = $em;
        $this->environment = $environment;
    }

    /**
     * {@inheritdoc}
     */
    public function exportFiles()
    {
        //Defines parameters
        set_time_limit(600);
        $sourceLanguage = $this->configService->getParameter('c975LXliff.source');
        $languages = $this->configService->getParameter('c975LXliff.languages');

        $root = $this->configService->getContainerParameter('kernel.project_dir');
        $rootTranslations = '3' === substr(Kernel::VERSION, 0, 1) ? $root . '/../app/Resources/translations/' : $root . '/../translations/';

        //Gets Filenames
        $filenames = $this->em
            ->getRepository('c975LXliffBundle:Xliff')
            ->findDistinctFilename()
        ;

        //Creates Folders
        $fs = new Filesystem();
        $fs->mkdir($rootTranslations, 0770);

        //Exports the files
        $files = array();
        foreach ($filenames as $filename) {
            foreach ($languages as $language) {
                $filenameXliff = $rootTranslations . $filename['filename'] . '.' . $language . '.xlf';
                $files[] = $filenameXliff;

                //File contents
                $translations = $this->em
                    ->getRepository('c975LXliffBundle:Xliff')
                    ->findAllByFilenameLanguage($filename['filename'], $sourceLanguage, $language);
                ob_start();
                    $contentsXliff = $this->environment->render('@c975LXliff/skeleton.xlf.twig', array(
                        'sourceLanguage' => $sourceLanguage,
                        'filename' => $filename['filename'],
                        'language' => $language,
                        'translations' => $translations
                        ));
                ob_end_clean();

                //Writes file
                $fs->dumpFile($filenameXliff, trim($contentsXliff));
            }
        }

        return $files;
    }
}
