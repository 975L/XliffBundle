<?php
/*
 * (c) 2016: 975l <contact@975l.com>
 * (c) 2016: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\XliffBundle\Repository;

use Doctrine\ORM\EntityRepository;
use c975L\XliffBundle\Entity\Xliff;

class XliffRepository extends EntityRepository
{

    //Find all the records for the filename and the language
    public function findAllByFilenameLanguage($filename, $language)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT x.id, x.transKey, x.' . $language . ' AS target
                FROM c975L\XliffBundle\Entity\Xliff x
                WHERE x.filename = :filename
                    AND x.' . $language . ' IS NOT NULL
                ORDER BY x.transKey ASC'
            )
            ->setParameters(array(
                'filename' => $filename
            ))
            ->getResult();
    }

}
