<div class="sidebar">

    <div class="items"><a href="<?=URLROOT . '/LibraryStaff/index' ?>" class="sidebar-drop"><img src="<?=URLROOT . '/public/assets/dashboard.png'?>" alt="sidebar-image" class="sidebar-img"><span> Dashboard </span></a></div>
    <div class="items"><a href="#" class="sidebar-drop"><img src="<?=URLROOT . '/public/assets/service.png'?>" alt="sidebar-image" class="sidebar-img"><span onclick="window.location.href = '<?=URLROOT . '/LibraryStaff/Bookcatalog'?>'"> Book Catalogue </span><span class="see-more" onclick='expandSideBar("sub-items-serv")'>	&#43;</span></a>
        <div class="sub-items" id="sub-items-serv">
            <a href="<?=URLROOT . '/LibraryStaff/addbooks' ?>">Add Book</a>
            <a href="<?=URLROOT . '/LibraryStaff/lostbooks' ?>">Lost Book List</a>
            <a href="<?=URLROOT . '/LibraryStaff/damagedbooks' ?>">Damaged Book List</a>
            <a href="<?=URLROOT . '/LibraryStaff/delistedbooks' ?>">De-Listed Book List</a>

        </div>
    </div>
    <div class="items"><a href="<?=URLROOT . '/LibraryStaff/bookrequest' ?>" class="sidebar-drop"><img src="<?=URLROOT . '/public/assets/event.png'?>" alt="sidebar-image" class="sidebar-img"><span> Book Requests </span></a></div>
    <div class="items"><a href="#" class="sidebar-drop"><img src="<?=URLROOT . '/public/assets/usermanagement.png'?>" alt="sidebar-image" class="sidebar-img"><span onclick="window.location.href = '<?=URLROOT . '/LibraryStaff/Users'?>'"> User Management </span><span class="see-more" onclick='expandSideBar("sub-items-user")'>	&#43;</span></a>
        <div class="sub-items" id="sub-items-user">
            <a href="<?=URLROOT . '/LibraryStaff/addusers' ?>">Create User</a>
            <a href="<?=URLROOT . '/LibraryStaff/disabledusers' ?>">Disabled User List</a>
        </div>
    </div>
    <div class="items"><a href="<?=URLROOT . '/LibraryStaff/analytics' ?>" class="sidebar-drop"><img src="<?=URLROOT . '/public/assets/project.png'?>" alt="sidebar-image" class="sidebar-img"><span> Analytics </span></a></div>

</div>


<script>
    function expandSideBar(id){
        document.getElementById(id).classList.toggle("show-drop");
    }
</script>