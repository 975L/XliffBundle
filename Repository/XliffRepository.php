<?php
/*
 * (c) 2016: 975L <contact@975l.com>
 * (c) 2016: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\XliffBundle\Repository;

use c975L\XliffBundle\Entity\Xliff;
use Doctrine\ORM\EntityRepository;

/**
 * Repository for Xliff Entity
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2016 975L <contact@975l.com>
 */
class XliffRepository extends EntityRepository
{
    /**
     * Finds all the translations for defined filename
     * @return mixed
     */
    public function findAllByFilenameLanguage($filename, $sourceLanguage, $language)
    {
        $qb = $this->createQueryBuilder('x');
        $qb->select('x.id, x.transKey, x.' . $sourceLanguage . ' AS default, x.' . $language . ' AS target')
            ->where('x.filename = :filename')
            ->setParameter('filename', $filename)
            ->orderBy('x.transKey', 'ASC')
            ;

        return $qb->getQuery()->getResult();
    }

    /**
     * Finds distinct filenames
     * @return mixed
     */
    public function findDistinctFilename()
    {
        $qb = $this->createQueryBuilder('x');
        $qb->select('x.filename')
            ->orderBy('x.filename', 'ASC')
            ->distinct()
            ;

        return $qb->getQuery()->getResult();
    }
}
