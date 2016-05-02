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
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use c975L\XliffBundle\Repository\XliffRepository;
use c975L\XliffBundle\Entity\Xliff;
use c975L\XliffBundle\Helpers\Helpers;

class DefaultController extends Controller
{

    /**
     * @Route("/975l_xliff")
     * @Method({"GET", "HEAD"})
     */
    public function indexAction()
    {
        set_time_limit(600);
        $languages = array('en', 'fr', 'es');
        $xlfSkeleton = '@c975LXliff/Default/skeleton.xlf.twig';
        $rootTranslations = __DIR__.'/../../../../app/Resources/translations/';
        $files = array();
        $em = $this->getDoctrine()->getManager();

        //Filenames
        $filenames = $em->getRepository('c975LXliffBundle:Xliff')
            ->findDistinctFilename();

        //Folder creation
        if(!is_dir($rootTranslations))
            mkdir($rootTranslations, 0775, true);

        //Exports the files
        foreach($filenames as $filename) {
            foreach($languages as $language) {
                $filenameXliff = $rootTranslations . $filename['filename'] . '.' . $language . '.xlf';
                $files[] = $filenameXliff;

                //File contents
                $xliff = $em->getRepository('c975LXliffBundle:Xliff')
                    ->findAllByFilenameLanguage($filename['filename'], $language);
                ob_start();
                    $contentsXliff = $this->renderView($xlfSkeleton, array(
                        'filename' => $filename['filename'],
                        'language' => $language,
                        'xliff' => $xliff
                        ));
                ob_end_clean();

                //File writing
                file_put_contents($filenameXliff, $contentsXliff);
            }
        }
    return $this->render('@c975LXliff/Default/index.html.twig', array(
        'files' => $files,
        ));
    }

}
