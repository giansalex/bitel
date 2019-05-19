<?php


namespace App\Repository;

use App\Entity\Colegios;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ColegiosRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Colegios::class);
    }

    public function getWithSearchQueryBuilder(?string $term): QueryBuilder
    {
        $qb = $this->createQueryBuilder('c');

        if (!empty($term)){
            $qb = $qb->andWhere('c.id = :id')
                    ->setParameter('id', $term);
        }

        return $qb
                ->addOrderBy('c.id', 'DESC')
            ;
    }
}