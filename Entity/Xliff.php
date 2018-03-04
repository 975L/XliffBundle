<?php
/*
 * (c) 2016: 975l <contact@975l.com>
 * (c) 2016: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\XliffBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

/**
 * Xliff
 *
 * @ORM\Table(name="translations")
 * @ORM\Entity(repositoryClass="c975L\XliffBundle\Repository\XliffRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Xliff
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=16, nullable=true)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="trans_key", type="string", length=32, nullable=true)
     */
    private $transKey;

    /**
     * @var string
     *
     * @ORM\Column(name="en", type="string", length=1024, nullable=true)
     */
    private $en;

    /**
     * @var string
     *
     * @ORM\Column(name="fr", type="string", length=1024, nullable=true)
     */
    private $fr;

    /**
     * @var string
     *
     * @ORM\Column(name="es", type="string", length=1024, nullable=true)
     */
    private $es;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return Xliff
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set transKey
     *
     * @param string $transKey
     *
     * @return Xliff
     */
    public function setTransKey($transKey)
    {
        $this->transKey = $transKey;

        return $this;
    }

    /**
     * Get filenmae
     *
     * @return string
     */
    public function getTransKey()
    {
        return $this->transKey;
    }

    /**
     * Set en
     *
     * @param string $en
     *
     * @return Xliff
     */
    public function setEn($en)
    {
        $this->en = $en;

        return $this;
    }

    /**
     * Get filenmae
     *
     * @return string
     */
    public function getEn()
    {
        return $this->en;
    }

    /**
     * Set fr
     *
     * @param string $fr
     *
     * @return Xliff
     */
    public function setFr($fr)
    {
        $this->fr = $fr;

        return $this;
    }

    /**
     * Get filenmae
     *
     * @return string
     */
    public function getFr()
    {
        return $this->fr;
    }

    /**
     * Set es
     *
     * @param string $es
     *
     * @return Xliff
     */
    public function setEs($es)
    {
        $this->es = $es;

        return $this;
    }

    /**
     * Get filenmae
     *
     * @return string
     */
    public function getEs()
    {
        return $this->es;
    }
}
