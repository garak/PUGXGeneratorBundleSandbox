<?php

namespace Garak\SandboxBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Garak\SandboxBundle\Entity\User;

class LoadUserData extends AbstractFixture
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        

        $pippo = new Tag();
        $pippo->setName('pippo');
        $manager->persist($pippo);
        $this->addReference('tag_pippo', $pippo);

        $pluto = new Tag();
        $pluto->setName('pluto');
        $manager->persist($pluto);
        $this->addReference('tag_pluto', $pluto);

        $manager->flush();
    }
}
