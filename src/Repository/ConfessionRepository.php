<?php

namespace App\Repository;

use App\Entity\Confession;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @method Confession|null find($id, $lockMode = null, $lockVersion = null)
 * @method Confession|null findOneBy(array $criteria, array $orderBy = null)
 * @method Confession[]    findAll()
 * @method Confession[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConfessionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Confession::class);
    }


	public function findAllByUserId($value) {
		return $this->findBy(
			['belongsto' => $value]
		);
	}

	public function findOneById($id)
	{
		return $this->createQueryBuilder('c')
		            ->andWhere('c.id = :id')
		            ->setParameter('id', $id)
		            ->getQuery()
			;
	}

//    /**
//     * @return Confession[] Returns an array of Confession objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Confession
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
