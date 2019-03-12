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
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Main Controller class
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2016 975L <contact@975l.com>
 */
class XliffController extends AbstractController
{
    /**
     * Creates the xlf files
     * @return Response
     *
     * @Route("/xliff/create",
     *    name="xliff_create",
     *    methods={"HEAD", "GET"})
     */
    public function create(XliffServiceInterface $xliffService)
    {
        return $this->render('@c975LXliff/pages/create.html.twig', array(
            'files' => $xliffService->exportFiles(),
            ));
    }
}
