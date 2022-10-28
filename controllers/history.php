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
<?php include '.././view/head.php'; ?>
</head>
<body>

   <?php include '.././view/navbar.php'; ?>
            <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
                <main>
                    <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                        <div class="mb-4 flex items-center justify-between">
                            <div>
                                <h3 class="text-4xl font-bold text-gray-900 mb-2">Historiques</h3>
                            </div>

                        </div>
                        <div class="flex flex-col mt-8">
                            <div class="overflow-x-auto rounded-lg">
                                <div class="align-middle inline-block min-w-full">
                                    <div class="shadow overflow-hidden sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Temps de travail
                                                    </th>
                                                    <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Date & Heure
                                                    </th>
                                                    <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Gain
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white">
                                                <tr>
                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                        Payment from <span class="font-semibold">Bonnie Green</span>
                                                    </td>
                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                        Apr 23 ,2021
                                                    </td>
                                                    <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                        $2300
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </main>
            </div>
        </div>


    </div>

</body>

</html>