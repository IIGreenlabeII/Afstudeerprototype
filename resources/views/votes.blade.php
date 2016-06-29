<style>
    html, body {
        width: 100%;
        background-color: #F2F0E5 !important;
    }

    .title {
        color: #5D4888 !important;
        font-size: 1.5em;
        font-weight: bold;
    }

    h1 {
        color: #5D4888 !important;
    }

    progress {
        background-color: #f3f3f3;
        border: 0;
        height: 4.0em;
        width: 100%;
    }

    progress::-webkit-progress-bar {
        background-color: #F2AE6C;
    }

    progress::-webkit-progress-value {
        background-color: #E17149;
    }

    progress::-moz-progress-bar {
        background-color: #E17149;
    }
</style>

<script>
    $(function() {
  $('progress').each(function() {
    var max = $(this).val();
    $(this).val(0).animate({ value: max }, { duration: 2000, easing: 'easeOutCirc' });
			});
});
</script>
<html>
    <head>
        <title>Overzicht</title>
        <meta http-equiv="refresh" content="1" >
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
        <body>
            <div class="container">
                <div class="content">
                    <h1>
                    <center>Totaal aantal stemmen: <?php echo $votesData[0] ?></center>
                    </h1>
                    <br/>
                    <br/>
                    <section id="progress">
                    <progress value="<?php echo number_format(($votesData[1] / $votesData[0]) * 100) ?>" max="100"></progress>
                    <span class="title">Loco Dice: Sending this one out
                    <?php echo number_format(($votesData[1] / $votesData[0]) * 100) . '%' ?></span>
                    <br/>
                    <br/>
                    <progress value="<?php echo number_format(($votesData[2] / $votesData[0]) * 100) ?>" max="100"></progress>
                    <span class="title">Loco Dice: Get Comfy
                    <?php echo number_format(($votesData[2] / $votesData[0]) * 100) . '%'?></span>
                    <br/>
                    <br/>
                    <progress value="<?php echo number_format(($votesData[3] / $votesData[0]) * 100) ?>" max="100"></progress>
                    <span class="title">Loco Dice: Party Angels
                    <?php echo number_format(($votesData[3] / $votesData[0]) * 100) . '%'?></span>
                    <br/>
                    </section>
                </div>
            </div>
        </body>
</html>
