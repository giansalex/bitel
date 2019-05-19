<?php


namespace App\Repository;

use App\Entity\Antenas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Symfony\Bridge\Doctrine\RegistryInterface;

class AntenasRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Antenas::class);
    }

    public function getWithSearchQueryBuilder(?string $term): QueryBuilder
    {
        $qb = $this->createQueryBuilder('c');

        if (!empty($term)){
            $qb = $qb->andWhere('c.id LIKE :term OR c.direccion LIKE :term')
                    ->setParameter('term', '%'.$term.'%');
        }

        return $qb
                ->addOrderBy('c.id', 'DESC')
            ;
    }
}