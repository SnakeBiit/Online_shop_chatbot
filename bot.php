<?php include "./includes/db.php" ?> 
<?php session_start(); ?>
<?php include "./budget.php" ?>
<?php include "./budgetTool.php" ?>
<?php
    $price = $_SESSION['perfect_price'];
    $querry = "SELECT * FROM assets WHERE asset_price = $price ";
              $select_all_assets = mysqli_query($connection, $querry);
              while($row = mysqli_fetch_assoc($select_all_assets)){
              $assetId = $row['asset_id'];
              
              }
    $priceTool = $_SESSION['priceTool'];
    $queryTools = "SELECT * FROM tools WHERE tool_price = $priceTool ";
              $select_all_tools = mysqli_query($connection, $queryTools);
              while($row = mysqli_fetch_assoc($select_all_tools)){
              $toolId = $row['tool_id'];
             
              }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Chat-Bot</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/botui@0.3.9/build/botui.min.css"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/botui@0.3.9/build/botui-theme-default.css"
    />
    <style>
      html,
      body {
        background-color: #41c0cc;
        background-image: linear-gradient(-90deg, #41c0cc, #41cca5);
      }
      .botui-container {
        background-color: inherit;
      }

      .botui-messages-container {
      }

      .botui-actions-container {
        padding: 0px 30px;
      }

      .botui-message {
      }

      .botui-message-content.text {
        background-color: #e1fafc;
        color: #404040;
      }

      .botui-message-content.human {
        background-color: #f7ff61;
        color: #404040;
      }

      .botui-message-content.embed {
      }

      .botui-message-content-link {
      }

      .botui-actions-text-input {
      }

      .botui-actions-text-submit {
      }

      button.botui-actions-buttons-button {
        margin-top: 0px;
      }
    </style>
 
  </head>
  <body>
    <div class="botui-app-container" id="chat-bot">
      <bot-ui>
       
      </bot-ui>
    </div>
    <!-- use Vue version 2.0.5 for HTML embeds | https://github.com/botui/botui/issues/103-->
    <!-- remove .min from the file name to use in development mode -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/botui@0.3.9/build/botui.min.js"></script>
     <script>
          var botui = new BotUI("chat-bot");
          botui.message.add({
          delay: 1000,
          loading: true,
          content: "Hello, <br><?php echo $_SESSION['username'] ?>! I'm going to be your assistant",
        }).then(function () {
          return botui.message.add({
          delay: 1000,
          loading: true,
          content: "Since <br><?php echo $_SESSION['username'] ?> is your username, I want to know you better. What is your real name?",
        }).then(function () {
          return botui.action.text({
          action: {
                placeholder: 'Enter your text here'
              }
            })
        }).then(function (res) {
            return botui.message.add({
                  delay: 1000,
                  loading: true,
                    content: "Nice to meet you, "+ res.value +"! My name is Pixelbot.",
                })
        }).then(function (){
            return botui.message.add({
                  delay: 1000,
                  loading: true,
                    content: "These are my options. How can I help you?",
                })
        }).then(function (){
               return botui.action.button({
                    action: [
                          {
                            text: 'What is the best asset for my budget?',
                            value: 'asset',
                          },
                          {
                            text: 'What is the best tool for my budget?',
                            value: 'tool',
                          },
                          {
                            text: 'I want to contact you!',
                            value: 'contact',
                          },
                          {
                            text: 'I want to know more about you!',
                            value: 'about',
                          },
                           {
                            text: "I don't want to talk to you anymore! ",
                            value: 'home',
                          },
                          ],
                    });
        }).then(function(res){
              var message;

              if (res.value === "asset") {
                message = "Hey! ![](./photos/happy.png) Very good choise, this is the best asset for you! [Best Asset Money Can Buy](./showAsset.php?id=<?php echo $assetId ?>)^";
              } 
              if (res.value === "tool") {
                message = "Hey! ![](./photos/happy.png) Very good choise, this is the best tool for you! [Best Tool Money Can Buy](./showTool.php?id=<?php echo $toolId ?>)^";
              } 
              if (res.value === "contact") {
                message = "Hey! ![](./photos/happy.png) You can contact us using this link! [Contact Us](./about.php#bottom2)^";
              } 
               if (res.value === "about") {
                message = "Hey! ![](./photos/happy.png) Here are some informations about us! [About Us](./about.php)^";
              } 
               if (res.value === "home") {
                message = "Ok! ![](./photos/bad.png) You can search manualy for our products using the search bar [Home Page](./index.php)^";
              } 
              return botui.message.add({
                     
                      delay: 1000,
                      loading: true,
                      content: message,
              });
        })
        });
        
         
        </script>
  </body>
  
</html>
