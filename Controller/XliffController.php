<?php
/*
 * (c) 2016: 975L <contact@975l.com>
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
use c975L\XliffBundle\Service\XliffService;

class XliffController extends Controller
{
    /**
     * @Route("/xliff/create",
     *      name="xliff_create")
     * @Method({"GET", "HEAD"})
     */
    public function create(XliffService $xliffService)
    {
        return $this->render('@c975LXliff/pages/create.html.twig', array(
            'files' => $xliffService->exportFiles(),
            ));
    }
}