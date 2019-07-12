<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    private $users = [
        0 =>[
            'image' => 'https://akns-images.eonline.com/eol_images/Entire_Site/201159/300.cohen.lc.060911.jpg?fit=inside|900:auto&output-quality=90',
            'name' => 'Borat Dicktathor',
            'shortname' => 'The Dicktathor',
            'reknown' => 'Royal Academy of Painting and Sculpture',
            'bio' => 'Barot has just finished his final year at The Royal Academy of Painting and Sculpture, where he excelled in glass etching paintings and portraiture. Hailed as one of the most diverse artists of his generation, Barot is equally as skilled with watercolors as he is with oils, and is just as well-balanced in different subject areas. Barot\'s collection entitled "The Un-Collection" will adorn the walls of Gilbert Hall, depicting his range of skills and sensibilities - all of them, uniquely Barot, yet undeniably different',
        ],
        1 =>[
            'image' => 'https://d3ew4rh7xxgmkq.cloudfront.net/performer/106824/photos/106824-9aa240ecb04b45349e3e3acb8b388bc7-2.jpg',
            'name' => 'Jonathan G. Ferrar II',
            'shortname' => 'Jonathan_Ferrar',
            'reknown' => 'Artist to Watch in 2012',
            'bio' => 'The Artist to Watch in 2012 by the London Review, Johnathan has already sold one of the highest priced-commissions paid to an art student, ever on record. The piece, entitled Gratitude Resort, a work in oil and mixed media, was sold for $750,000 and Jonathan donated all the proceeds to Art for Peace, an organization that provides college art scholarships for creative children in developing nations',
        ],
        2 => [
            'image' => 'http://2.bp.blogspot.com/_YqNdVQsH0IM/S9CJ7OTDAuI/AAAAAAAAH28/ITiEJtftHzI/s320/08.jpg',
            'name' => 'Hillary Hewitt Goldwynn-Post',
            'shortname' => 'Hillary_Goldwynn',
            'reknown' => 'New York University',
            'bio' => 'Hillary is a sophomore art sculpture student at New York University, and has already won all the major international prizes for new sculptors, including the Divinity Circle, the International Sculptor\'s Medal, and the Academy of Paris Award. Hillary\'s CAC exhibit features 25 abstract watercolor paintings that contain only water images including waves, deep sea, and river.',
        ],
        3 => [
            'image' => 'http://www.clairfield.com/wp-content/uploads/2017/03/US-Miami-Araya.jpg',
            'name' => 'Hassum Harrod',
            'shortname' => 'Hassum_Harrod',
            'reknown' => 'Art College in New Dehli',
            'bio' => 'The Art College in New Dehli has sponsored Hassum on scholarship for his entire undergraduate career at the university, seeing great promise in his contemporary paintings of landscapes - that use equal parts muted and vibrant tones, and are almost a contradiction in art. Hassum will be speaking on "The use and absence of color in modern art" during Thursday\'s agenda.',
        ],
        4 =>[
            'image' => 'https://www.avenir-suisse.ch/files/2019/05/as_Parzer-Epp_Verena_website-low-13877-300x300-c-top.jpg',
            'name' => 'Jennifer Jerome',
            'shortname' => 'Jennifer_Jerome',
            'reknown' => 'New Orleans, LA',
            'bio' => 'A native of New Orleans, much of Jennifer\'s work has centered around abstract images that depict flooding and rebuilding, having grown up as a teenager in the post-flood years. Despite the sadness of devastation and lives lost, Jennifer\'s work also depicts the hope and togetherness of a community that has persevered. Jennifer\'s exhibit will be discussed during Tuesday\'s Water in Art theme.',
        ],
        5 =>[
            'image' => 'http://photo.sydex.net/53127657.jpg',
            'name' => 'LaVonne L. LaRue',
            'shortname' => 'LaVonne_LaRue',
            'reknown' => 'Chicago, IL',
            'bio' => 'LaVonne\'s giant-sized paintings all around Chicago tell the story of love, nature, and conservation - themes that are central to her heart. LaVonne will share her love and skill of graffiti art on Monday\'s schedule, as she starts the painting of a 20-foot high wall in the Rousseau Room of Hotel Contempo in front of a standing-room only audience in Art in Unexpected Places.',
        ],
        6 =>[
            'image' => 'https://cdn-img.instyle.com/sites/default/files/styles/640x768/public/images/2015/WRN/011615-lucy-hale-face-washing-594.jpg?itok=DbdokzJ_',
            'name' => 'Constance Olivia Smith',
            'shortname' => 'Constance_Smith',
            'reknown' => 'Fullerton-Brighton-Norwell Award',
            'bio' => 'Constance received the Fullerton-Brighton-Norwell Award for Modern Art for her mixed-media image of a tree of life, with jewel-adorned branches depicting the arms of humanity, and precious gemstone-decorated leaves representing the spouting buds of togetherness. The daughter of a New York jeweler, Constance has been salvaging the discarded remnants of her father\'s jewelry-making since she was five years old, and won the New York State Fair grand prize at the age of 8 years old for a gem-adorned painting of the Manhattan Bridge.',
        ],
        7 =>[
            'image' => 'https://www.taille-age-celebrites.com/wp-content/uploads/riley-keough-actrice.jpg',
            'name' => 'Riley Rudolph Rewington',
            'shortname' => 'Riley_Rewington',
            'reknown' => 'Roux Academy of Art, Media, and Design',
            'bio' => 'A first-year student at the Roux Academy of Art, Media, and Design, Riley is already changing the face of modern art at the university. Riley\'s exquisite abstract pieces have no intention of ever being understood, but instead beg the viewer to dream, create, pretend, and envision with their mind\'s eye. Riley will be speaking on the "Art of Abstract" during Thursday\'s schedule',
        ],
        8 => [
            'image' => 'https://www.buro247.sg/thumb/300x300_5/images/beauty/beauty-tutorial-mastering-the-melted-on-korean-lip-look-as-inspired-by-makeup-guru-pony-syndrome-buro247.sg-sq.jpg',
            'name' => 'Xhou Ta',
            'shortname' => 'Xhou_Ta',
            'reknown' => 'China International Art University',
            'bio' => 'A senior at the China International Art University, Xhou has become well-known for his miniature sculptures, often the size of a rice granule, that are displayed by rear projection of microscope images on canvas. Xhou will discuss the art and science behind his incredibly detailed works of art.',
        ]
    ];
//--------------------------------------------------------------------------------------------------
    //je cree ma route home
    /**
     * @Route("/homePage", name="homePage")
     */
    public function homePage()
    {
        //je cree une variable qui me selectionne les 2 premiers profile de mon array $users.
        $firstProfiles = array_slice($this->users, 0,2);
        return $this->render('homePage.html.twig',
            [
                'users'=>$this->users,
                'firstProfiles'=>$firstProfiles
            ]
        );
    }
    //--------------------------------------------------------------------------------------------------
    //je cree ma route contact
    /**
     * @Route("/contact",name="contact_page")
     */
    public function contact(){
        return $this->render('contactPage.html.twig',
            [
                'users'=>$this->users
            ]
        );
    }
    //--------------------------------------------------------------------------------------------------
    //je cree ma route list
    /**
     * @Route("/list",name="list_page")
     */
    public function list(){
        return $this->render('listPage.html.twig',
            [
                'users'=>$this->users
            ]
        );
    }
    //--------------------------------------------------------------------------------------------------
    //je cree ma route profile
    /**
     * @Route("/profile/{id}",name="profile_page")
     */
    public function profile($id){
        return $this->render('profilePage.html.twig',
            [
                'users'=>$this->users,
                'user'=>$this->users[$id]
            ]
        );
    }

}