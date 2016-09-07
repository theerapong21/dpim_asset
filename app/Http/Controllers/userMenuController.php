<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jsonT = '{
    "menu_bar": [{
        "menu_main_id": 1,
        "menu_screen_code": "m0",
        "menu_start_at": "T",
        "menu_screen_name_th": "หน้าหลัก",
        "menu_screen_name_en": "HOME",
        "menu_right": ["R", "w", "E", "D"],
        "menu_submenu_1": [{
            "menu_s_sub1_id": 1,
            "menu_s_screen_code": "m0_s0",
            "menu_s_screen_name_th": "ข่าว",
            "menu_s_screen_name_en": "NEWS",
            "menu_s_right": ["R", "w", "E", "D"],
            "menu_s_submenu_2": [{
                "menu_s_s_sub2_id": 1,
                "menu_s_s_screen_code": "m0_s0_s0",
                "menu_s_s_screen_name_th": "สร้างข่าว",
                "menu_s_s_screen_name_en": "create news",
                "menu_s_s_right": ["R", "w", "E", "D"]
            }, {
                "menu_s_s_sub2_id": 2,
                "menu_s_s_screen_code": "m0_s0_s1",
                "menu_s_s_screen_name_th": "ลบข่าว",
                "menu_s_s_screen_name_en": "delete news",
                "menu_s_s_right": ["R", "w", "E", "D"]
            }, {
                "menu_s_s_sub2_id": 3,
                "menu_s_s_screen_code": "m0_s0_s2",
                "menu_s_s_screen_name_th": "แก้ไขข่าว",
                "menu_s_s_screen_name_en": "edit news",
                "menu_s_s_right": ["R", "w", "E", "D"]
            }]
        }, {
            "menu_s_sub1_id": 2,
            "menu_s_screen_code": "m0_s1",
            "menu_s_screen_name_th": "กระดานข่าว",
            "menu_s_screen_name_en": "FORUMS",
            "menu_s_right": ["R", "w", "E", "D"],
            "menu_s_submenu_2": [{
                "menu_s_s_sub2_id": 4,
                "menu_s_s_screen_code": "m0_s1_s0",
                "menu_s_s_screen_name_th": "สร้างข่าว",
                "menu_s_s_screen_name_en": "create news",
                "menu_s_s_right": ["R", "w", "E", "D"]
            }, {
                "menu_s_s_sub2_id": 5,
                "menu_s_s_screen_code": "m0_s1_s1",
                "menu_s_s_screen_name_th": "แก้ไขกระดานข่าว",
                "menu_s_s_screen_name_en": "edit forums",
                "menu_s_s_right": ["R", "w", "E", "D"]
            }]
        }]
    }, {
        "menu_main_id": 2,
        "menu_screen_code": "m_screen",
        "menu_start_at": "F",
        "menu_screen_name_th": "เพิ่มหน้าจอ",
        "menu_screen_name_en": "Add Screens",
        "menu_right": ["R", "w", "E", "D"],
        "menu_submenu_1": []
    },{
        "menu_main_id": 3,
        "menu_screen_code": "m_main_menu",
        "menu_start_at": "F",
        "menu_screen_name_th": "กำหนดเมนูหลัก",
        "menu_screen_name_en": "set main menu",
        "menu_right": ["R", "w", "E", "D"],
        "menu_submenu_1": []
    }]
}';
        $content = json_decode($jsonT, true);
        return response($content);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
