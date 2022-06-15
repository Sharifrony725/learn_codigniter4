<?php 
namespace App\Controllers;
class Blog extends BaseController {
    public function index(){
        $parser = service('parser');
        $data = [
          'name'  => 'shariful islam',
          'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium facilis provident laboriosam quo, est similique dicta laborum dolorum nam, veniam voluptate explicabo quaerat qui libero neque eum, voluptatibus reiciendis. Velit nemo quae ullam qui deleniti maxime eveniet doloremque autematis, neque, rerum possimus alias maiores voluptatibus molestiae! Veniam temporibus laudantium, libero possimus ullam delectus maxime ipsam explicabo iusto pariatur adipisci architecto doloremque consequuntur quaerat. Temporibus vero exercitationem, amet corporis explicabo ex nesciunt maxime. Asperiores minus dignissimos, quisquam aperiam voluptatem accusantium. Nisi enim vero corrupti repellendus modi. Mollitia vitae dolores omnis doloribus, sapiente eos neque, accusamus cum numquam ullam maxime! aliquam verit',
            'date' =>  '15-06-2022',
            'price' => '1000'
        ];
        $parser->setData($data);
        return $parser->render('blog/index');
    }
}
