<?php
/*
 * (c) 2016: 975l <contact@975l.com>
 * (c) 2016: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\XliffBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use c975L\XliffBundle\Repository\XliffRepository;
use c975L\XliffBundle\Entity\Xliff;

class XliffController extends Controller
{
    /**
     * @Route("/975l_xliff",
     *      name="975l_xliff")
     * @Method({"GET", "HEAD"})
     */
    public function indexAction()
    {
        set_time_limit(600);
        $sourceLanguage = $this->getParameter('c975_l_xliff.source');
        $languages = $this->getParameter('c975_l_xliff.languages');
        $rootTranslations = __DIR__.'/../../../../' . $this->getParameter('c975_l_xliff.rootTranslations') . '/';
        $xlfSkeleton = '@c975LXliff/skeleton.xlf.twig';

        $files = array();
        $em = $this->getDoctrine()->getManager();

        //Filenames
        $filenames = $em->getRepository('c975LXliffBundle:Xliff')
            ->findDistinctFilename();

        //Folder creation
        $fs = new Filesystem();
        $fs->mkdir($rootTranslations, 0770);

        //Exports the files
        foreach ($filenames as $filename) {
            foreach ($languages as $language) {
                $filenameXliff = $rootTranslations . $filename['filename'] . '.' . $language . '.xlf';
                $files[] = $filenameXliff;

                //File contents
                $xliff = $em->getRepository('c975LXliffBundle:Xliff')
                    ->findAllByFilenameLanguage($filename['filename'], $sourceLanguage, $language);
                ob_start();
                    $contentsXliff = $this->renderView($xlfSkeleton, array(
                        'sourceLanguage' => $sourceLanguage,
                        'filename' => $filename['filename'],
                        'language' => $language,
                        'xliff' => $xliff
                        ));
                ob_end_clean();

                //Writes file
                $fs->dumpFile($filenameXliff, trim($contentsXliff));
            }
        }

        return $this->render('@c975LXliff/index.html.twig', array(
            'files' => $files,
            ));
    }
}
