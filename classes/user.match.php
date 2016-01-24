<?php
Class LetZC_Match{
    public $mysqli_connection;
    public $homepath;

    public function __construct($id,$mysqli,$homepath)
    {
        $this->mysqli_connection = $mysqli;
        $this->homepath = $homepath;
    }

    public function topMatch()
    {
        // Alogorithm here
        $output = "<div class=\"item active\">";
        $output .= "<div class=\"col-md-6 col-md-offset-1\">Test</div>";
        $output .= "<img class=\"first-slide\" src=\"images/baker.jpg\"></div>";
        return $output;
    }

    public function matchList($id=0,$limit)
    {
        // If the calendar does not display (by checking the user's meta key)
        $sql = "SELECT * FROM user WHERE id <> '$id' LIMIT $limit";
        $result = $this->mysqli_connection->query($sql);
        if(mysqli_num_rows($result) != 0)
        {
            $output = "<div class=\"row\">";

            while ($row = $result->fetch_assoc()) {
                $output .= "<div class=\"col-lg-4 text-center\">";
                $output .= "<img class=\"img-circle\" src=\"".$this->homepath."images/profile-picture-".$row["id"].".jpg\" width = \"140\" height = \"140\" >";
                $output .= "<h2>".$row["first_name"]."</h2>";
                $output .= "<p>".$row["description"]."</p>";
                $output .= "<p><a class=\"btn btn-default\" href=\"dashboard.php?id=".$row["id"]."\" role=\"button\">View details »</a ></p>";
                $output .= "</div ><!-- /.col - lg - 4-->";
            }

            $output .= "</div>";
        } else
        {
            $output = "You have no matches.";
        }

        return $output;
    }

    public function categoryDropdown()
    {
        // If the calendar does not display (by checking the user's meta key)
        $sql = "SELECT * FROM categories";
        $result = $this->mysqli_connection->query($sql);
        if(mysqli_num_rows($result) != 0) {
            $output .= "<div class=\"dropdown\"><button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">";
            $output .= "Categories";
            $output .= "<span class=\"caret\"></span></button>";
            $output .= "<ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">";

            while ($row = $result->fetch_assoc()) {
                $output .= "<li><a href=\"#\">".$row["name"]."</a></li>";
            }

            $output .= "</ul>";
            $output .= "</div>";

            return $output;
        }
    }
}
