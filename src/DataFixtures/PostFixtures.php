<?php

namespace App\DataFixtures;

use App\Entity\Post;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PostFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach ($this->getPostData() as [$titre, $contenu, $created_at]) {
            $post = new Post();
            $post->setTitre($titre);
            $post->setContenu($contenu);
            $post->setCreatedAt($created_at);
    
            $manager->persist($post);
        }
 
        $manager->flush();
    }
 
    private function getPostData(): array
    {
        return [
            // $postData = [$titre, $contenu, $create_at,];
            ['article 1', 'lorem ipsum', new \DateTime("now")],
            ['article 2', 'lorem ipsum', new \DateTime("now")],
            ['article 3', 'lorem ipsum', new \DateTime("now")],
            ['article 4', 'lorem ipsum', new \DateTime("now")],
            ['article 5', 'lorem ipsum', new \DateTime("now")],
            
        ];
    }
}
