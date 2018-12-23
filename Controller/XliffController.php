<?php
/*
 * (c) 2016: 975L <contact@975l.com>
 * (c) 2016: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\XliffBundle\Controller;

use c975L\XliffBundle\Service\XliffServiceInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Main Controller class
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2016 975L <contact@975l.com>
 */
class XliffController extends Controller
{
    /**
     * Creates the xlf files
     * @return Response
     *
     * @Route("/xliff/create",
     *      name="xliff_create")
     * @Method({"GET", "HEAD"})
     */
    public function create(XliffServiceInterface $xliffService)
    {
        return $this->render('@c975LXliff/pages/create.html.twig', array(
            'files' => $xliffService->exportFiles(),
            ));
    }
}