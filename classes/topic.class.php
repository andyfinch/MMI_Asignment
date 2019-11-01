<?

class Topic
{
    protected $Conn;

    public function _construct($Conn)
    {
        $this->Conn = $Conn;
    }

    public function createTopic($topic_data)
    {
        $sec_password = password_hash($topic_data['password'], PASSWORD_DEFAULT);
    }

}

?>
