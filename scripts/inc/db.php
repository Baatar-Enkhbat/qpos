<?php
class Db
{
    protected $link;
    protected $error;

    public function debug($value)
    {
        $this->query("insert into debug set value='" . addslashes($value) . "', ognoo=now() ");
    }

    public function row($sql)
    {
        $rs = $this->query($sql);

        if ($rs == null) {
            return null;
        } else {
            return $rs->fetch_assoc();
        }
    }

    public function col($sql)
    {
        $rs = $this->query($sql);

        if ($rs == null) {
            return null;
        }
        $arr = [];

        while ($rw = $rs->fetch_array()) {
            $arr[] = $rw[0];
        }

        return $arr;

    }

    public function val($sql)
    {
        $rs = $this->query($sql);
        if ($rs == null) {
            return null;
        }
        $row = $rs->fetch_array();
        return $row[0];
    }

    public function query($sql)
    {
        $rs = mysqli_query($this->link, $sql);

        if ($this->link->errno) {
            $this->error = $this->link->error;
            mysqli_query($this->link,
                "insert into error set
                date = now(),
                query = '" . addslashes($sql) . "',
                error = '" . addslashes($this->error) . "',
                file = '" . addslashes($_SERVER['REQUEST_URI']) . "',
                referer = '" . addslashes($_SERVER['HTTP_REFERER']) . "'
                "
            );
            if (DISPLAY_ERROR) {
                echo "*********** MySQL query error ***********";
                echo $this->error;
            } else {
                echo "system error!";
            }
            exit;

        }
        return $rs;
    }

    public function __construct($host, $database, $user, $password)
    {
        error_reporting(0);
        mysqli_report(MYSQLI_REPORT_OFF);
        $this->link = new mysqli($host, $user, $password, $database);

        if (mysqli_connect_errno() != 0) {
            if (DISPLAY_ERROR) {
                echo "*********** en -> mysql connect error ***********
               <br>*********** mn-> мэдээллийн базын холболтын алдаа ***********
               <br>*********** ja-> データベース接続エラー　***********<br>";
                echo "*********** host: $host, user: $user, password: $password, database: $database ***********<br>
                *********** scripts/inc/db/php -> check, шалга, 確認 ***********";
            } else {
                echo "en -> Oops, error!
                <br>mn-> Алдаа гарлаа!
                <br>ja-> エラーが発生しました。";
            }
        } else {
            $this->link->set_charset("utf8");
        }
    }
}
