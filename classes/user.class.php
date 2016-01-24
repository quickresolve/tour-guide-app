<?php

Class LetZC_User {
    private $mysqli;

    public $id;
    public $first_name;
    public $last_name;
    public $birthdate;
    public $age_range;
    public $experience_level;
    public $email;
    public $rating_tourist;
    public $rating_guide;
    public $city;
    public $instagram_username;
    public $neighborhood;
    public $description;
    public $username;
    public $image_path;

    public function __construct($id,$mysqli,$homepath)
    {
        // Query DB
        $sql = "SELECT * FROM user WHERE id = '$id' LIMIT 1";
        $result = $mysqli->query($sql);

        /* fetch associative array */
        while ($row = $result->fetch_assoc()) {
            $this->first_name = $row["first_name"];
            $this->last_name = $row["last_name"];
            $this->birthdate = $row["birthdate"];
            $this->age_range = $row["age_range"];
            $this->experience_level = $row["experience_level"];
            $this->email = $row["email"];
            $this->rating_tourist = $row["rating_tourist"];
            $this->rating_guide = $row["rating_guide"];
            $this->city = $row["city"];
            $this->instagram_username = $row["instagram_username"];
            $this->neighborhood = $row["neighborhood"];
            $this->description = $row["description"];
            $this->username = $row["username"];
            $this->image_path = $homepath."images/profile-picture-".$id.".jpg";
        }
    }

    public function getCategories($id)
    {
        $categories = "";


        return $categories;
    }

    public function getInterests($id)
    {
        $interests = "";


        return $interests;
    }

    public function googleCalendarDisplay()
    {
        // If the calendar does not display (by checking the user's meta key)
        $sql = "SELECT * FROM user_meta WHERE id = '$id' AND meta_key = 'google_calendar_id' LIMIT 1";
        $result = $mysqli->query($sql);
        if(mysqli_num_rows($result) == 0)
        {
            // Create a calendar through the API


            // Save the Google Calendar ID as user meta key (google_calendar_id)
        }

        // Make Google Calendar API call



        return $calendar;
    }
}

?>