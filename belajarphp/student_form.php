<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai</title>
</head>
<body>
    <div class="bg-danger p-5">
    <h1 class="text-center text-white">Student Value Form</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="student_form.php" method="GET" class="mt-3">
            
            <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="nama" value="" class="form-control" required>
                </div>

                
            <div class="form-group">
                    <label for="">Nim</label>
                    <input type="number" name="Basis_data" value="" class="form-control" required>
                </div>
                <label for="">Lesson</label>
                <select class="form-select form-control" name="matkul" class="form-control" required>
                    <option selected>Choose Lesson :</option>
                    <option value="web programming">Web Programming</option>
                    <option value="Database">Database</option>
                    <option value="Statiska">Statiska</option>
                    <option value="PKN">PKN</option>
                    <option value="UI/UX">UI/UX</option>
                </select>
                <div class="form-group">
                    <label for=""> UTS Value</label>
                    <input type="number" name="pemrograman_web"value="" class="form-control" required>
                </div>

                
                <div class="form-group">
                    <label for="">UAS Value</label>
                    <input type="number" name="statistik" value="" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="">assigment_value</label>
                    <input type="text" name="belajar_web" value="" class="form-control" required>
                </div>
                <input type="submit" value="Save" name="proses" class="btn btn-danger btn-sm btn-block">

            </form> 
            <?php
            
            error_reporting(0);

                $nama = $_GET['nama'];
                $nim = $_GET['Basis_data'];
                $lesson = $_GET['matkul'];
                $uts = $_GET['pemrograman_web'];
                $uas = $_GET['statistik'];
                $assignment_value = $_GET['belajar_web'];
                $total_nilai = $uas + $uts + $assignment_value / 3;
            ?>

            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-danger text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Name : <?php echo $nama?></li>
                    <li class="list-group-item">Nim : <?php echo $nim?></li>
                    <li class="list-group-item">Lesson: <?php echo $lesson?></li>
                    <li class="list-group-item"> UTS Value : <?= $uts?></li>
                    <li class="list-group-item">UAS Value: <?= $uas?></li>
                    <li class="list-group-item">Assignment Value: <?= $assignment_value?></li>
                    <li class="list-group-item">Value Total: <?= $total_nilai?></li>
                    <li class="list-group-item">Value in Alphabet: </li>
                    
               
                    
                </ul>
                </div>

            </div>
            
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-danger text-white">
                    Value
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 85 - 100</li>
                    <li class="list-group-item">B : 70 -84</li>
                    <li class="list-group-item">C: 60-79</li>
                    <li class="list-group-item">D : 40 - 59 </li>
                    <li class="list-group-item">C : Less than 40 </li>
                    
                    
                </ul>
                </div>

        </div>
        
    </div>
</body>
</html>
