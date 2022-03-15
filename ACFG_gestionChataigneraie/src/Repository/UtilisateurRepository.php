<?php

namespace App\Repository;

use App\Entity\UTILISATEUR;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UTILISATEUR|null find($id, $lockMode = null, $lockVersion = null)
 * @method UTILISATEUR|null findOneBy(array $criteria, array $orderBy = null)
 * @method UTILISATEUR[]    findAll()
 * @method UTILISATEUR[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UTILISATEURRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UTILISATEUR::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(UTILISATEUR $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(UTILISATEUR $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return UTILISATEUR[] Returns an array of UTILISATEUR objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UTILISATEUR
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
