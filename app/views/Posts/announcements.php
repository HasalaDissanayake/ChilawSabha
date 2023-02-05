<?php
$post = [
        'title' => 'A special Announcement',
        'category' => 'test',
        'shortdesc' => 'This is a very special announcement about something.',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque optio
 consequuntur consequatur voluptates repellendus eos aliquam? Eaque dolor esse
 debitis velit voluptatibus voluptates saepe reiciendis numquam sunt distinctio
 natus dicta est fuga quisquam eveniet, nostrum quos neque dolorum, non
 aliquam. Expedita possimus nam sapiente fuga? Illum voluptates eligendi
 quisquam et assumenda! Esse dicta earum corporis quam illo rem ipsam soluta
 alias omnis tenetur, cum, sequi sunt incidunt, in corrupti nam facere
 accusantium deleniti laboriosam officia eius modi officiis suscipit. Magnam
 laborum debitis molestias dolorum facere. Nostrum, provident! Possimus fuga
 praesentium velit numquam in odit corrupti! Odio rerum voluptate doloribus!
 Cum!',
        'author' => 'Sarindu Thampath',
        'date' => '2023-01-23',
    ];
$posts = [
    $post,$post,
    $post,$post,
    $post,$post,
    $post,$post,
    $post,$post,
];
?>
<div class="cat-title">
    Announcements
</div>
<hr />
<div class="filters">
    <form action="<?=URLROOT . '/Posts'?>" method="get" id="filterform">
        <div class="filter">
            <label for="search">
                Search
            </label>
            <input class="search" type="search" name="search" id="search" value="<?= isset($_GET['search']) ? $_GET['search']:''?>">
            <span onclick="send()"></span>
        </div>
        <div class="filter">
            <label for="category">
                Filter by Category
            </label>
            <select onchange="send()" name="category" id="category">
                <?php foreach (['All'=>'All','test1'=>'Test Category 1','test2'=> 'Test Cat 2'] as $cat_v=>$cat_d):?>
                    <option value="<?=$cat_v?>" <?php if(isset($_GET['category']) && $_GET['category']==$cat_v) {echo 'selected';} ?>>
                        <?=$cat_d?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="filter">
            <label for="sort">
                Sort by date
            </label>
            <select onchange="send()" name="sort" id="sort">
                <?php foreach(['DESC'=>'Newest to Oldest','ASC'=>'Oldest to Newest'] as $val=>$desc):?>
                    <option value="<?= $val ?>" <?php if(isset($_GET['sort']) && $_GET['sort']==$val) {echo 'selected';} ?>>
                        <?=$desc?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
</div>
<div class="posts">
    <?php foreach($posts as $post): ?>
        <div class="post shadow">
            <div class="title">
                <a href="#"><?=$post['title']?></a>
            </div>
            <hr>
            <div class="shortdesc">
                <?=$post['shortdesc']?>
            </div>
            <div class="details">
                <div class="author">
                    <?=$post['author']?>
                </div>
                <div class='date'>
                    <?=implode('/',explode('-',$post['date']))?>
                </div>
                <div class='category'>
                    <a href="#">
                        <?=$post['category']?>
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<script>
    const send = ()=>{
        document.getElementById('filterform').submit();
    }
</script>
<div class="page-nav">
    <?php
    // $size = $table['page'][1];
    // $max = $table['count'];
    // $page = $table['page];
    //placeholders
    $page = [20,10];
    $size = $page[1];
    $max = 101;
    $page_count = ceil($max / $size);
    $current = $page[0] / $size;
    ?>
    <div class="page-nos">
        <?php if($current!=0):?>
            <a href="<?= URLROOT . "/Posts/?page=0&size=$size" ?>" class="page-btn first"></a>
            <a href="<?= URLROOT . "/Posts/?page=".($current - 1)."&size=$size" ?>" class="page-btn prev"></a>
        <?php endif; ?>
        <select name="page" onchange="send()" id="page">
            <?php
            $i = 0;
            for (; $i * $size < $max; $i++) : ?>
                <option value="<?= $i ?>" <?= $i==$current?'selected' : ''?>><?= $i + 1 ?></option>
            <?php endfor ?>
        </select>
        <?php if($current<$page_count-1):?>
            <a href="<?= URLROOT . "/Posts/?page=" . ($current + 1) . "&size=$size" ?>" class="page-btn next"></a>
            <a href="<?= URLROOT . "/Posts/?page=" . ($page_count - 1) . "&size=$size" ?>" class="page-btn last"></a>
        <?php endif; ?>
    </div>
    <div class="page-size">
        No.of Posts per page : <select name="size" onchange="send()" id="size">
            <?php foreach ([10, 25, 50, 100] as $page_size) : ?>
                <option value="<?= $page_size ?>" <?= $page_size == $size?'selected':''?>><?= $page_size ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>
</form>