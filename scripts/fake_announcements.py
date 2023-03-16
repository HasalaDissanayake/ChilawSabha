import mysql.connector
from random import choice,randint

lorem = """Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam accusamus adipisci harum ut, libero nemo quos voluptates distinctio! Nihil eveniet, architecto in dicta velit commodi, a dolorum libero harum voluptatum aliquam ipsam, iste rerum odio sint natus illo eligendi. Vel, qui! Temporibus, doloremque id! Neque sunt fugit numquam? Atque tenetur aliquam nihil quam. Veniam maxime perspiciatis ipsa error accusamus, placeat nam et. Dolores odio sint suscipit, perspiciatis dolor porro beatae. Beatae corrupti voluptas quas et, dolores suscipit iusto deserunt possimus? Deleniti ab ut quam repellendus. Vel eos, tenetur quia fugiat doloribus est porro natus quibusdam, recusandae magnam architecto ad. Aliquid consectetur in enim ea neque et dolore quis, error qui suscipit tempora ut debitis fuga labore dolorem esse id, velit expedita, alias deserunt a at sequi optio pariatur! Dolorum distinctio quos unde excepturi, veritatis sint accusantium recusandae. Voluptas, ipsum quibusdam natus unde sint cum deleniti provident corrupti sit nobis expedita saepe veritatis aperiam perspiciatis autem blanditiis quasi odit perferendis ad quam. Nulla rerum eum natus quae ipsum aspernatur. Dolorum quibusdam facere suscipit ipsam magni sequi molestiae repellendus error praesentium dolorem velit tempore, cumque nulla, minima explicabo nam, aut similique adipisci quam alias soluta vero. Nisi, animi dolores? Itaque libero similique eaque! Tenetur similique beatae rem reiciendis provident iusto totam. Autem, quibusdam suscipit voluptatum eum tenetur voluptates reiciendis. Odio assumenda, sequi minima facilis nisi aperiam, necessitatibus blanditiis mollitia quisquam expedita accusamus eveniet placeat impedit quaerat dolor consectetur! Facilis ducimus doloribus, soluta impedit vero esse sunt natus dolores maiores accusamus delectus voluptatem laboriosam et magnam tempore rerum corporis quisquam a dolorem, aspernatur magni. Dolores deleniti consectetur beatae quam fugit quidem aliquid praesentium rerum dolorum non, nobis sit sunt commodi at voluptas quia recusandae quaerat aperiam? A enim dignissimos nemo praesentium consequuntur perferendis, porro nesciunt magnam laborum pariatur non animi amet corrupti placeat magni inventore accusamus, minus id repudiandae atque adipisci autem, aliquid fugit delectus? Cum possimus accusantium asperiores labore illum incidunt impedit eligendi voluptate, ullam minima quis mollitia corrupti doloribus vitae animi! Nostrum, voluptate! Quasi, dolores. Vitae officia, obcaecati velit accusamus ea nulla provident earum voluptatem impedit aperiam distinctio inventore similique sequi delectus corrupti odio vel placeat totam sapiente quam? Reiciendis natus repellat distinctio hic totam, itaque, laudantium voluptatem impedit, recusandae facere alias. Corporis consequuntur officia cupiditate qui. Nihil tempore corrupti quo distinctio iste modi eaque vel eius aut. Excepturi veritatis ad doloremque a saepe dolor dicta sapiente ullam, sequi, quam obcaecati libero distinctio voluptas blanditiis nisi nemo natus accusantium voluptates! Sit laudantium dolores itaque laborum ut dolor veniam quae cum. Culpa sint excepturi omnis eum, sequi eius tenetur, voluptatem molestias ducimus nam nobis numquam odio distinctio saepe eaque a ratione quo suscipit iste molestiae consectetur nisi blanditiis obcaecati! Dolor totam laudantium harum ullam eaque, dicta quisquam iste aspernatur quod itaque fugit fugiat ratione quis nobis saepe repellendus at sequi atque culpa nostrum, impedit vitae, quos incidunt a. Dolore necessitatibus odio, unde ex temporibus enim pariatur autem aspernatur voluptas iste, omnis molestiae in et explicabo facere, obcaecati adipisci fuga ipsam. Accusamus placeat itaque corrupti tenetur, quod dolorem beatae. Distinctio deserunt aliquam libero odio totam ea nam quam quas nostrum? Ipsa at nam atque debitis assumenda veniam, doloremque, autem aspernatur tenetur culpa beatae nemo minima distinctio nulla, tempora dolorem saepe ea nisi et! Eos ex eius in! Nisi deleniti dolore nostrum alias? Vel, inventore qui. Consequuntur, porro aperiam beatae eveniet in ut tempore velit quasi. Qui numquam expedita quas neque molestias ratione recusandae est possimus aliquid asperiores incidunt fuga laborum deserunt iste, quo magni unde, accusamus, rem optio suscipit vitae. Tenetur id dicta ipsum deserunt, dolorum amet alias rerum deleniti quia consectetur sit exercitationem doloribus ipsam nisi! Quos nemo ducimus vel exercitationem dolore excepturi repudiandae distinctio dolorem dolor officiis deserunt incidunt assumenda deleniti, dolorum beatae perferendis qui ut consequatur et sit iste accusamus illo quibusdam vitae. Quidem animi qui, odio ut nesciunt ipsam pariatur amet at unde! Nemo distinctio dolorum eligendi nihil numquam culpa ipsum hic impedit itaque fugiat in cumque magni delectus voluptate ducimus laboriosam, enim atque dolorem officiis non architecto rem fugit. Modi veritatis rerum sunt cumque neque, enim sit nulla libero expedita, eius eveniet hic delectus praesentium esse, quos tenetur soluta iste porro? Sunt eos voluptatem soluta temporibus, neque, exercitationem, placeat necessitatibus sint ratione perspiciatis quisquam beatae ducimus suscipit ipsa iure excepturi quam officiis. Voluptates labore minus inventore, commodi accusantium ducimus a consequuntur quas deserunt quia, mollitia perferendis neque doloribus soluta voluptatum iusto provident atque consequatur sequi autem voluptatem magni sint earum asperiores. Vero ullam omnis minima veniam labore harum dolorem numquam nihil possimus quae pariatur veritatis, quibusdam id ea, dolore porro corporis iure aperiam nam alias fuga quaerat. Odio, officiis aperiam non quae fuga neque accusamus eligendi molestias, reprehenderit vero recusandae. Est incidunt nisi iure laboriosam voluptatibus cum consectetur eligendi doloremque unde modi, fuga expedita quaerat nihil natus enim. Quos, amet qui beatae ex ea deserunt dolore sunt asperiores commodi quidem porro dolores voluptate veniam vitae ut labore placeat, eum sint et quaerat tempora dolorum! Id, labore quae! Ullam facilis fuga vel officiis officia suscipit aspernatur molestias eius illo, nostrum, beatae aut deleniti facere at saepe earum animi, optio incidunt sunt repellendus dolore est enim? Ea provident fugiat iusto officia? Est ratione quos officiis optio porro quo quibusdam iure enim earum! Consequatur commodi accusantium distinctio nihil a doloribus soluta eius animi, alias in ipsa voluptates atque veritatis, amet vitae culpa, tenetur dolores? Consequuntur cupiditate libero eius placeat eos numquam sapiente explicabo adipisci saepe harum at mollitia unde similique molestiae aperiam expedita excepturi odit quis, perferendis nostrum ab soluta dolorum qui! Vitae, blanditiis quibusdam explicabo fuga itaque aliquam fugiat hic neque ad quisquam possimus laudantium dolorem error inventore at ducimus nihil natus eveniet veritatis voluptates voluptatibus modi iure. Fugiat iste voluptatem, sed exercitationem sit velit, ab voluptatibus sapiente provident fuga recusandae accusamus? Ipsum harum nihil perferendis quisquam aliquam cum aperiam sit enim, vel beatae impedit perspiciatis, molestiae veniam facere eaque eius, quasi id quia magnam minima sunt fugiat quod? Exercitationem, vitae iste! Pariatur, blanditiis nostrum? Temporibus dolore ad voluptates sit.""".split()
mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="chilawsabha"
)

mycursor = mydb.cursor()
for i in range(int(input("How many announcements? "))):
    """public function putAnnouncement($data)
    {
        // Separate Post and Announcement data
        $announcement = [
            'ann_type_id' => $data['ann_type_id'],
        ];
        unset($data['ann_type_id']);
        $data['pinned'] = boolval($data['pinned'] ?? 0);
        $post_data = $data;
        $post = $this->putPost($post_data, 1);
        if ($post !== false) {
            $announcement['post_id'] = $post['put'][0];
            $this->insert('announcements', $announcement);
        }
        return [$post];
    }
    protected function putPost($post_data,int $post_type) {
        // Put common post data in post_table
        unset($post_data['attachments']);
        unset($post_data['photos']);
        $post_data['post_type'] = $post_type;
        $post_data['posted_by'] = $_SESSION['user_id'];
        $post_data['views'] = 0;
        $insert = $this->insert('post',$post_data);
        if($insert['success'] ?? false) {
            // handle images and attachments
            $id = $this->conn->query('SELECT LAST_INSERT_ID() AS id');
            $id = $id ? ($id->fetch_all(MYSQLI_ASSOC)[0]['id'] ?? false) : false;
            if($id !== false) {
                //Store Images
                $images = Upload::storeUploadedImages('public/upload/','photos');
                $image_errors = [];
                if($images !== false)
                    for($i=0;$i < count($images); ++$i) {
                        $image_errors[] = [
                            $images[$i]['error'],
                            $images[$i]['orig']
                        ];
                        if($images[$i]['error'] === false) {
                            $this->insert('post_images',[
                                'post_id' => $id,
                                'image_file_name' => $images[$i]['name']
                            ]);
                        }
                    }
                // Store Attachments
                $attachments = Upload::storeUploadedFiles('downloads/','attachments',true);
                $attach_errors = [];
                if($attachments !== false)
                    for($i=0;$i < count($attachments); ++$i) {
                        $attach_errors[] = [
                            $attachments[$i]['error'],
                            $attachments[$i]['orig']
                        ];
                        if($attachments[$i]['error'] === false) {
                            $this->insert('post_attachments',[
                                'post_id' => $id,
                                'attach_file_name' => $attachments[$i]['name']
                            ]);
                        }
                    }
                return ['put' => [$id,$image_errors,$attach_errors]];
            }
        }
        return false;
    }"""
    sql = "INSERT INTO `post` (`post_type`, `title`, `short_description`, `content`, `views`, `posted_by`, `posted_time`, `pinned`, `hidden`) VALUES (1,%s,%s,%s,%s,%s,current_timestamp(), '0', '0')"
    post_type = str(randint(1,4))
    val = tuple([
      ' '.join([choice(lorem) for i in range(randint(4,10))]),
      ' '.join([choice(lorem) for i in range(randint(20,50))]),
      ' '.join([choice(lorem) for i in range(randint(60,1000))]),
      str(randint(0,1000)),
      '1',
    ])
    mycursor.execute(sql, val)
    mycursor.execute("select LAST_INSERT_ID() as id")
    res = mycursor.fetchall()
    id = str(res[0][0])
    mycursor.execute("INSERT INTO `announcements` (`post_id`, `ann_type_id`) VALUES (%s, %s)",(id,post_type))
    print(mycursor.rowcount, "records inserted.")
mydb.commit()
