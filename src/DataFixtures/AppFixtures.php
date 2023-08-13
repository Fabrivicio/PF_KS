<?php

namespace App\DataFixtures;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\DataFixtures\AppFixtures;
use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactoryInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
class AppFixtures extends Fixture
{

    public function __construct(private UserPasswordHasherInterface $userPasswordHasher){
       

    }
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $user = new user();
        $user->setEmail('fabrizio.uribe@gmail.com');
        $hashedPassword = $this->userPasswordHasher->hashPassword($user, 'abc');
        $user->setPassword($hashedPassword);
        $manager->persist($user);
        $manager->flush();
    }
}
