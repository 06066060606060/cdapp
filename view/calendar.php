<?php
session_start();
// If the  not logged redirect to index...

if (!isset($_SESSION['loggedin'])) {
   header('Location: .././index.php');
   exit;
}
?>
<!DOCTYPE html>
<html>

<head>
   <?php include 'parts/head.php'; ?>
   <link rel="stylesheet" href="../css/calendar.css">
</head>


<body>

   <div>
      <?php include 'parts/navbar.php'; ?>
      <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64 pb-8">
         <div class="calendar" id="calendar-app">
            <div class="calendar--day-view" id="day-view">
               <span class="day-view-exit" id="day-view-exit">&times;</span>
               <span class="day-view-date" id="day-view-date"></span>
               <div class="day-view-content">
                  <div class="day-highlight">
                    <span class="day-events" id="day-events">Vous n'avez pas travailler ce jour</span>
                    <span tabindex="0" onkeyup="if(event.keyCode != 13) return; this.click();" class="day-events-link" id="add-event" data-date>Ajouter un nouvel évenement?</span>
                  </div>
                  <div class="day-add-event" id="add-day-event-box" data-active="false">
                     <div class="row">
                        <div class="half">
                           <label class="add-event-label">
                              Nom
                              <input type="text" class="add-event-edit add-event-edit--long" placeholder="New event" id="input-add-event-name">

                           </label>
                        </div>
                        <div class="qtr">
                           <label class="add-event-label">
                              Début
                              <input type="text" class="add-event-edit" placeholder="8:15" id="input-add-event-start-time" data-options="1,2,3,4,5,6,7,8,9,10,11,12" data-format="datetime">
                              <input type="text" class="add-event-edit" placeholder="am" id="input-add-event-start-ampm" data-options="a,p,am,pm">
                           </label>
                        </div>
                        <div class="qtr">
                           <label class="add-event-label">
                              Fin
                              <input type="text" class="add-event-edit" placeholder="9:00" id="input-add-event-end-time" data-options="1,2,3,4,5,6,7,8,9,10,11,12" data-format="datetime">
                              <input type="text" class="add-event-edit" placeholder="am" id="input-add-event-end-ampm" data-options="a,p,am,pm">
                           </label>
                        </div>
                        <div class="half">
                           <a onkeyup="if(event.keyCode != 13) return; this.click();" tabindex="0" id="add-event-save" class="event-btn--save event-btn">Sauvegarder</a>
                           <a tabindex="0" id="add-event-cancel" class="event-btn--cancel event-btn">Annuler</a>
                        </div>
                     </div>

                  </div>
                  <div id="day-events-list" class="day-events-list">

                  </div>
                  <div class="day-inspiration-quote" id="inspirational-quote">

                  </div>
               </div>
            </div>
            <div class="calendar--view" id="calendar-view">
               <div class="cview__month">
                  <span class="cview__month-last" id="calendar-month-last">Avril</span>
                  <span class="cview__month-current" id="calendar-month">Mai</span>
                  <span class="cview__month-next" id="calendar-month-next">Juin</span>
               </div>
               <div class="cview__header">Dimanche</div>
               <div class="cview__header">Lundi</div>
               <div class="cview__header">mardi</div>
               <div class="cview__header">Mercredi</div>
               <div class="cview__header">Jeudi</div>
               <div class="cview__header">Vendredi</div>
               <div class="cview__header">Samedi</div>
               <div class="calendar--view" id="dates">
               </div>
            </div>
            <div class="footer">
               <span><span id="footer-date" class="footer__link">
                  </span></span>
            </div>
         </div>
         <script src="../js/calendar.js"></script>
      </div>
   </div>



</body>

</html>