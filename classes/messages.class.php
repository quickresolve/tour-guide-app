<?php

Class LetZC_Messages {
    private $mysqli;

    public $current_user;
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
        $this->current_user = $id;
        $this->homepath = $homepath;
        $this->mysqli = $mysqli;

        // Query DB
        /*$sql = "SELECT * FROM user WHERE id = '$id' LIMIT 1";
        $result = $mysqli->query($sql);*/

        /* fetch associative array */
        /*while ($row = $result->fetch_assoc()) {
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
        }*/
    }

    public function getMessagePreview()
    {
        // Get the four most recently updated topics
        $sql = "SELECT * FROM messages_topic WHERE (user_1 = '$this->current_user' OR user_2 = '$this->current_user') AND visible = 1 ORDER BY date_modified DESC LIMIT 4";
        $result = $this->mysqli->query($sql);

        $message_preview = "<ul>";
        if(mysqli_num_rows($result)==0){
            $message_preview .= "<li><div class='col-md-12'>You have no messages. Sorry bud.</div></li></ul>";
            return $message_preview;
        }

        while ($row = $result->fetch_assoc()) {
            // For each topic get the most recent message
            $topic_id = $row["id"];
            $sql_meta = "SELECT * FROM messages_meta WHERE topic_id = '$topic_id' AND (receiver_id = '$this->current_user' OR sender_id = '$this->current_user') ORDER BY created_at LIMIT 1";
            $result_meta = $this->mysqli->query($sql_meta);

            while ($row_meta = $result_meta->fetch_assoc()) {

                $sql_user = "SELECT * FROM user WHERE id = '$this->current_user' LIMIT 1";
                $result_user = $this->mysqli->query($sql_user);

                while ($row_user = $result_user->fetch_assoc()) {
                    $message_preview .= "<li><div class='col-md-3'><span><a data-toggle='lightbox' href='#demoLightbox' data-id='".$row_meta["id"]."'><img src='".$this->homepath."images/profile-picture-".$this->current_user.".jpg' /></a></span></div><div class='col-md-6'><a href='#demoLightbox' data-toggle='lightbox' data-id='".$row_meta["id"]."'><div class='row'>".$row_user["first_name"]."</div><div class='row'><span class='message-date'>".$row_meta["created_at"]."</span></div></a></div></div></div><div class='col-md-2'><i class='fa fa-trash'></i></div></li>";

                }
            }
        }
        $message_preview .= "</ul>";

        return $message_preview;
    }

}

?>