<?php
/*
 * (c) 2016: 975L <contact@975l.com>
 * (c) 2016: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\XliffBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity Xliff (linked to DB table `translations`)
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2017 975L <contact@975l.com>
 *
 * @ORM\Table(name="translations")
 * @ORM\Entity(repositoryClass="c975L\XliffBundle\Repository\XliffRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Xliff
{
    /**
     * Translation unique id
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * Filename for .xlf file
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=16, nullable=true)
     */
    private $filename;

    /**
     * key that will be used for placeholder translation
     * @var string
     *
     * @ORM\Column(name="trans_key", type="string", length=32, nullable=true)
     */
    private $transKey;

    /**
     * Translation in english
     * @var string
     *
     * @ORM\Column(name="en", type="string", length=1024, nullable=true)
     */
    private $en;

    /**
     * Translation in french
     * @var string
     *
     * @ORM\Column(name="fr", type="string", length=1024, nullable=true)
     */
    private $fr;

    /**
     * Translation in spanish
     * @var string
     *
     * @ORM\Column(name="es", type="string", length=1024, nullable=true)
     */
    private $es;

    /**
     * Get id
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set filename
     * @param string
     * @return Xliff
     */
    public function setFilename(?string $filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     * @return string
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * Set transKey
     * @param string
     * @return Xliff
     */
    public function setTransKey(?string $transKey)
    {
        $this->transKey = $transKey;

        return $this;
    }

    /**
     * Get transKey
     * @return string
     */
    public function getTransKey(): ?string
    {
        return $this->transKey;
    }

    /**
     * Set en
     * @param string
     * @return Xliff
     */
    public function setEn(?string $en)
    {
        $this->en = $en;

        return $this;
    }

    /**
     * Get en
     * @return string
     */
    public function getEn(): ?string
    {
        return $this->en;
    }

    /**
     * Set fr
     * @param string
     * @return Xliff
     */
    public function setFr(?string $fr)
    {
        $this->fr = $fr;

        return $this;
    }

    /**
     * Get fr
     * @return string
     */
    public function getFr(): ?string
    {
        return $this->fr;
    }

    /**
     * Set es
     * @param string
     * @return Xliff
     */
    public function setEs(?string $es)
    {
        $this->es = $es;

        return $this;
    }

    /**
     * Get es
     * @return string
     */
    public function getEs(): ?string
    {
        return $this->es;
    }
}
