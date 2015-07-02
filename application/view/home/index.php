<div><button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">
  Simple collapsible
</button></div>
<div id="demo" class="jumbotron collapse">
    <div class="blog-header">
        <h1 class="blog-title" style="color: #269abc">Welcome <?php echo $_SESSION['username'];?></h1></div>
        <!--<p class="lead blog-description"><?php echo $_SESSION['username'];?></p>-->
      </div>
<div class="container" style="padding: 27px 15px;">
    <!--<form id="feedsForm" action="" method="POST">-->
    <input type="text" class="form-control" id="newfeed" name="newfeed" placeholder="Twirp Something..">
    <button type="submit" class="btn btn-primary comment_button" style="float:right" id="comment_button" name="comment_button">POST</button>
    
    <!--<div name="ajax-alert-box"></div>-->
</div> 
    <br/>
    <!--<div id="flash"></div>-->
    <div id="display" style="padding: 15px 15px;">
        <div id="flash"></div>
        <div class="news" name="ajax-alert-box" id="ajax-alert-box"></div>
        <div class="news" >
        </div>
    </div>


<script type="text/javascript">
    var newsfeeds = <?php echo json_encode($feeds); ?>
   // var latestComment=?php echo json_encode($latestComment); ?>;
   // var tauthor = ?php echo $feeds['author']; ?>
    //var tdate = ?php echo $feeds['date_time']; ?>
    //var tcontent = ?php echo $feeds['content']; ?>
</script>
<script type="text/javascript" src="<?php echo URL; ?>js/index.js?Math.random()"></script>
