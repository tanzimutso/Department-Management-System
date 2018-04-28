@extends('layouts.admin')

<style>

    .date{
        height: 60px;
        width: 85px;
        border: 1px green solid;
        font-size: 20px;
        text-align: center;
        background-color: green;
        color: white;
        margin-left: 350px;


    }

    .year{
        height: 50px;
        width: 85px;
        border: 1px green solid;
        font-size: 30px;
        text-align: center;
        background-color: white;
        color: green;
        font-weight: bold;
        margin-left: 350px;

    }



</style>

@section('title', 'Notice Index')

@section('content')

    <div class="col-md-12" style="font-size: 20px;">
        <div class="card">
            <div class="card-header">
                <span style="margin-left: 330px; font-size: 20px;"><strong>Notice Index</strong></span>
            </div>
            <div class="card-block">
                <form action="" method="post" class="form-horizontal ">
                    <div class="form-group row">
                        <div class="col-md-12">


                                <?php
                                echo "<span>";
                                $n = $notices;
                                    foreach ( $n->reverse() as $notice){

                                $date = $notice->created_in;
                                $newdate = (string)$date;
                                $newdate = str_replace("-"," ",$newdate);
                                $DateArray = (explode(" ",$newdate));
                                $month = "";
                                if($DateArray[1] == "01")
                                    $month = "Jan";
                                elseif($DateArray[1] == "02")
                                    $month = "Feb";
                                elseif($DateArray[1] == "03")
                                    $month = "Mar";
                                elseif($DateArray[1] == "04")
                                    $month = "April";
                                elseif($DateArray[1] == "05")
                                    $month = "May";
                                elseif($DateArray[1] == "06")
                                    $month = "Jun";
                                elseif($DateArray[1] == "07")
                                    $month = "Jul";
                                elseif($DateArray[1] == "08")
                                    $month = "Aug";
                                elseif($DateArray[1] == "09")
                                    $month = "Sep";
                                elseif($DateArray[1] == "10")
                                    $month = "Oct";
                                elseif($DateArray[1] == "11")
                                    $month = "Nov";
                                elseif($DateArray[1] == "12")
                                    $month = "Dec";



                        echo '<div class="date">';
                                echo $DateArray[2]; echo "<br>";

                                echo $month;
                        echo "</div>";

                        echo '<div class="year">';
   	                         echo $DateArray[0];
                            echo "</div>"."<br>";
                            echo "<div style='height: auto; width: 100%; background-color: #eee7cf; padding: 20px 20px; border: 1px #8b0a39 solid;'>";
                            echo    "<div style='color:#8b0a39; font-weight: bold; font-size: 30px;'>" .$notice->title." :"."</div>"."<br>";
                                        echo  "<div style='color:#248a92; font-weight: bold; font-size: 20px;'>" .$notice->body."</div>"."<br>";
                                echo "</div>";
                            echo "</span>";

                            echo '<div class="form-group row">';

                        echo '<div class="col-md-9">';


                        echo "</div>";
                    echo "</div>"."<br><br>";

                                    }
                            ?>

                        </div>
                    </div>

                </form>
            </div>
            <div class="card-footer">
            </div>
        </div>

@endsection