<div>
   <?php if(isset($_GET['success'])): ?>
<div class="alert alert-success">Vous étes connecté !</div>
   <?php endif ?>

<?php include 'parts/navbar.php'; ?>
      <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
         <main>
            <div class="pt-6 px-4">
               <div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4">

                 <?php include 'graph.php'; ?>

                  <?php include 'small_history.php'; ?>
               </div>
               <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
                  <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 mb-4">
                     <div class="flex items-center">
                        <div class="flex-shrink-0">
                           <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">340 €</span>
                           <h3 class="text-base font-normal text-gray-500">Cette Semaine</h3>
                        </div>
                        
                     </div>
                  </div>
                  <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 mb-4 ">
                     <div class="flex items-center">
                        <div class="flex-shrink-0">
                           <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">860 €</span>
                           <h3 class="text-base font-normal text-gray-500">La semaine derniére</h3>
                        </div>
                        
                     </div>
                  </div>
                 
                  </div>
               </div>
            </div>
         </main>
      </div>
   </div>
 
   <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
</div>