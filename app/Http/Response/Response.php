<?php
namespace App\Http\Response;

class Response {

    static function sendData($data)
    {
        $array = [
            'code' => 0,
            'data' => $data
        ];

        return json_encode($array);
    }

    static function sendList($data,$param = [], $ext = [])
    {
        $list = $data->items();
        $next = $data->nextPageUrl();
        $page = $data->currentPage();
        $limit = $data->perPage();
        $total = $data->total();

        if(!empty($next)) {

            $next_arr = explode('?',$next);

            if(!empty($param)) {

                $next = $next_arr[0]."?page".$next_arr[1].'&'.http_build_query($param);

            } else {

                $next = $next_arr[0]."?page".$next_arr[1];
            }
        }

        $array = [
            'code' => 0,
            'data' => [
                'list' => $list,
                'meta' => [
                    'next' => $next,
                    'page' => $page,
                    'limit' => $limit,
                    'total' => $total
                ],
                "head" => $ext
            ]
        ];

        return json_encode($array);
    }

}