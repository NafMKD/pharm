<!-- sidebar starts -->
<div class="sidebar">
    <!-- <i class="fab fa-twitter"></i> -->
    <img src="../assets/dist/img/logo.jpg" style="height: 70px;width:70px;" class="rounded-circle mb-2" />
    <a class="sidebarOption <?php if(isset($feeds_page)) echo $feeds_page; ?>" href="index.php?list">
        <span class="material-icons"> home </span>
        <h2>Feeds</h2>
    </a>

    <a class="sidebarOption <?php if(isset($events_page)) echo $events_page; ?>" href="events.php?list">
        <span class="material-icons"> event </span>
        <h2>Events</h2>
    </a>
</div>
<!-- sidebar ends -->