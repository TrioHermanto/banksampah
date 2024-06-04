<?php
function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    }
    //  else {
    //     $role_id = $ci->session->userdata('role_id');
    //     $userAccsess = $ci->db->get_where('user_role', [
    //         'id' => $role_id
    //     ]);

    //     if ($userAccsess = 1) {
    //         redirect('auth/block');
    //     }
    // }
}
