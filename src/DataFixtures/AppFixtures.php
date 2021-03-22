<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {

//        for ($i = 15; $i < 20; $i++) {
//            $user = new User();
//            $user->setFirstName(sprintf("user%d", $i));
//            $user->setEmail(sprintf("user%d@taktzeit.de", $i));
//            $user->setRoles(["ROLE_USER"]);
//            $password = $this->encoder->encodePassword($user, "user");
//            $user->setPassword($password);
//
//            $manager->persist($user);
//            $manager->flush();
//        }

//        $user = new User();
//        $user->setFirstName("admin");
//        $user->setEmail("admin@taktzeit.de");
//        $user->setRoles(["ROLE_ADMIN"]);
//        $password = $this->encoder->encodePassword($user, "admin");
//        $user->setPassword($password);
//
//        $manager->persist($user);
//        $manager->flush();

    }
}
