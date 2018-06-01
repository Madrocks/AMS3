<?php

namespace AM\SiteBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
/**
 * PostsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PostsRepository extends EntityRepository
{
    public function getPosts()
    {
        $query = $this->createQueryBuilder('a')
            ->orderBy('a.creationDate', 'DESC')
            ->getQuery()
        ;

        return $query->getResult();
    }
}