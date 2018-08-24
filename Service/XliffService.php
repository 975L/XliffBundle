<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\XliffBundle\Service;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Filesystem\Filesystem;
use Twig_Environment;
use c975L\XliffBundle\Service\XliffServiceInterface;

class XliffService implements XliffServiceInterface
{
    /**
     * Stores Container
     * @var ContainerInterface
     */
    private $container;

    /**
     * Stores EntityManager
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * Stores Twig_Environment
     * @var Twig_Environment
     */
    private $templating;

    public function __construct(
        ContainerInterface $container,
        EntityManagerInterface $em,
        Twig_Environment $templating
    ) {
        $this->container = $container;
        $this->em = $em;
        $this->templating = $templating;
    }

    /**
     * {@inheritdoc}
     */
    public function exportFiles()
    {
        //Defines parameters
        set_time_limit(600);
        $sourceLanguage = $this->container->getParameter('c975_l_xliff.source');
        $languages = $this->container->getParameter('c975_l_xliff.languages');
        $rootTranslations = $this->container->getParameter('kernel.root_dir') . $this->container->getParameter('c975_l_xliff.rootTranslations') . '/';

        //Gets Filenames
        $filenames = $this->em
            ->getRepository('c975LXliffBundle:Xliff')
            ->findDistinctFilename();

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
                    $contentsXliff = $this->templating->render('@c975LXliff/skeleton.xlf.twig', array(
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
