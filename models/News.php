<?php

class News
{
    /*Возвращает одну новость по идентификатору*/
    public static function getNewsItemById($id)
    {
        $id = intval($id);//ф-я возвращает целое значение переменной
        if($id) {
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM news WHERE id='.$id); //обращение к БД через обьект $db
            $result->setFetchMode(PDO::FETCH_ASSOC);//оставляет индексы только ввиде названий колонок
            //$result->setFetchMode(PDO::FETCH_NUM);//оставляет индексы только ввиде номеров колонок
            $newItem = $result->fetch();

            return $newItem;
        }
    }
    /*Возвращает список новостей*/
    public static function getNewsList()
    {
        $db = Db::getConnection();

        $newsList = array();//пустой масив для результатов
        $result = $db->query('SELECT id, title, date, short_content FROM news ORDER BY date DESC LIMIT 10;');

        $i = 0;
        while ($row = $result->fetch()){ //fetch()-вернет с $result строку ввиде массива, индексированного именами столбцов
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $i++;
        }

        return $newsList;
    }
}


?>