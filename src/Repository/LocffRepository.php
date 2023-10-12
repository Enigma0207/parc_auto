<?php

namespace App\Repository;

use App\Entity\Locff;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Locff>
 *
 * @method Locff|null find($id, $lockMode = null, $lockVersion = null)
 * @method Locff|null findOneBy(array $criteria, array $orderBy = null)
 * @method Locff[]    findAll()
 * @method Locff[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LocffRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Locff::class);
    }

//    /**
//     * @return Locff[] Returns an array of Locff objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Locff
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
