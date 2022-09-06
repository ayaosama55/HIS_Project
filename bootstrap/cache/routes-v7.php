<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jrH5DTdzUXxU791v',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vLXmjqqyeSjRkJh7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::04lcm5OztkmdsMXW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FkTDDUO6fVYyTeEA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile-patient' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CgOn9HtnOfD6RykY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/logout-patient' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RB7XKhvHeUe1fgGC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/available-tests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tCznAs4rPJgvO5fL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/test-reservation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0i6MkJxKPJMHSvCK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/available-vaccines' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Dzt6f5OiPHooNR3V',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dose-reservation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P2pYqNtR6BOyKR9B',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/avaiable-healthcare-centers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YJdlinQC0u1BSk2r',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/available-doctors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::llwSiyLmONuKZZ1y',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get-tests-reserved' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yk8JFrIfuJfGdvg8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/delete-test-reservation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T8QJc8d0i3L8Ax7h',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get-dose-reservation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UgEcPXnIb3xyRxTk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/update-dose-reservation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Va2olIqKEWowprSz',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/if-dose-reserved' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TKKnu3oWeYs0xvUH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/delete-dose-reservation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W0JuyQS7I5OB5HgV',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/contact-with-doctor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7qEYECJIuYoJMwpq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/messages_of_patient' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UvNzESCHc0yg31ia',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/doctor_data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I8TMY8yS1FnYSrky',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/messages_of_doctor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IBiKPNdCdH54Lsbc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/reply_to_message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oE7M806owkzgPB7M',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/doctor_logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gj0d8XAVkNsdVynR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/send-reset-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5hLYwV3npfKDWmk8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/available-vaccines-no-middleware' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8RxFMdDBv5ZUJcao',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/available-tests-no-middleware' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2anBk0td0MHzT5hM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/all-patients-registered' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::243db1F8lm0tD3Vt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/all-patients-logined' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yw3dTrWHgDvdUMd5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get-all-test-reservation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FVZ4a9H5F2FzFc6K',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get-all-dose-reservation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6htmXJU2xT0q7Xv4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7X0rlxjzybCVZ0dI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gq71H6fGAvymIMrh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ot4Q8vRUifLpXPjU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Op5HwiBG6by57urr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zbz30njhXgZhd4A2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact_us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact_us',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::89JF8vkt5XLhllIp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Editprofile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7RxDIghBqK2QrRSl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/updateprofile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::niW5JfflofkNCH5R',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uZTsnYnhJt24aVlX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/new_dose' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pi2G23XOW1PkTlRY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bookDose' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bookDose',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact_doc' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GttlTPMVJ52D8q4H',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sendDoc' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sendDoc.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-dashbord' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1qUuzB3ostQgcgZ8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_doc_data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7Gk1a4qFV70VGBxE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_doc_msg' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ym3stsIBvBkQfYWL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uq14JexlCAw66h9V',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_add_doc' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lCFHbSpIavBfklwT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GDnvOOyQtkFO0l4t',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_dose_data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K5qVpnGIizcNgTxS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_update_dose' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6Mq44BVgV057NSeZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_test_data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SZYeCkxjPvUpP1Sl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m4NxCOcb32lI0Sov',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/new_test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n5YkJYlQl0FmRVGK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::So8VyDI4aI8pFNhC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/my_tests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ux1zuMFBB8ZTRdtD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test_option' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TfpSIetgrLo474Pe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/doc_profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mpvPVWpx7YLaogoR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/submit-new-passord-api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bCjK94B9fV2io1E4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forgetPassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bIMRDSXxYiv1vkxc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forgetsend' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ar3c4yTNJDcE0Lks',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/resetpass' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wKpCAAJxJpYYzEM5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yR5B4UdEOUPkMWd5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_patient_data_show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0wRLROYtqYwWVOBM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_add_patient' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iPiACMfb2FbwRB9z',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mOVUvHNiobxfi8W0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/admin_(?|do(?|c_data/([^/]++)(*:37)|se_data_(?|update/([^/]++)(*:70)|del/([^/]++)(*:89)))|patient_data_show/delete_doc/([^/]++)(*:135))|/delete/([^/]++)(*:160)|/update_test/([^/]++)(?|(*:192))|/saveReply/([^/]++)(*:220)|/reset\\-password_api/([^/]++)(*:257))/?$}sDu',
    ),
    3 => 
    array (
      37 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EcKrbbRWfipfNAxs',
          ),
          1 => 
          array (
            0 => 'doc_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      70 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RD4wy7CxL4TlfH0U',
          ),
          1 => 
          array (
            0 => 'pat_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      89 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0T8xUehsa1UMdJoH',
          ),
          1 => 
          array (
            0 => 'pat_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      135 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3ZG4FbOOVDBF3N1j',
          ),
          1 => 
          array (
            0 => 'pat_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      160 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZKJlcfQRNMYsfTNX',
          ),
          1 => 
          array (
            0 => 'res_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      192 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jdczFfEZh8POy2wD',
          ),
          1 => 
          array (
            0 => 'res_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::icdVXPbMkPj9UxKV',
          ),
          1 => 
          array (
            0 => 'res_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      220 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jmJhltZqPqnV40Jj',
          ),
          1 => 
          array (
            0 => 'msg_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bA4INAa3ssx3ciHz',
          ),
          1 => 
          array (
            0 => 'email',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::jrH5DTdzUXxU791v' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::jrH5DTdzUXxU791v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vLXmjqqyeSjRkJh7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:324:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:105:"function(){
    return [
        \'msg\' => \'congratulation 🎉🎈, successful get request\',
    ];
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003670000000000000000";}";s:4:"hash";s:44:"fgGQ2Y4d5zJUlLpgA6Gj/T+2K4kVmfaJT11krG7242g=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::vLXmjqqyeSjRkJh7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::04lcm5OztkmdsMXW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:1720:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1500:"function(\\Illuminate\\Http\\Request $request){

    // get request body
    $patient_first_name = $request->patient_first_name;
    $patinet_last_name = $request->patient_last_name;
    $patinet_age = $request->patient_age;
    $patinet_address = $request->patienet_address;
    $patient_phone = $request->patient_phone;
    $patient_email = $request->patient_email;
    $patient_date_of_birth = $request->patient_date_of_birth;
    $patient_SSN = $request->patient_SSN;
    $patient_password = $request->patient_password;

    // check if SSN or email exist
    $query = \\Illuminate\\Support\\Facades\\DB::select(\'select pat_id from patient where pat_SSN = ? or pat_email = ?\',
    [$patient_SSN,$patient_email]);

    if($query){
        return [
            \'msg\' => \'this email or social security number is already registered before\'
        ];
    }

    $result = \\Illuminate\\Support\\Facades\\DB::insert(\'insert into patient (pat_fname,pat_lname,pat_age,pat_address,pat_phone,pat_email,pat_DOF,pat_SSN,patient_password)
    VALUES (?,?,?,?,?,?,?,?,?)\',[
        $patient_first_name,$patinet_last_name,$patinet_age,$patinet_address, $patient_phone, $patient_email,
        $patient_date_of_birth, $patient_SSN, $patient_password
    ]);

    if($result){
        return \\response([
            \'msg\' => \'successful registeration\'
        ]);
    }
    else {
        return \\response([
            \'msg\' => \'error, unsuccessful registeration\'
        ]);
    }
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003690000000000000000";}";s:4:"hash";s:44:"KyJCMK3KXAUWHknJW2eXCPrCOukRsS3UGe/3Cbyuy7s=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::04lcm5OztkmdsMXW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FkTDDUO6fVYyTeEA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:1740:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1520:"function(\\Illuminate\\Http\\Request $request){

    // receive email and password from user
    $email = $request->email;
    $password = $request->password;

    // search for patient in DB
    $result = \\Illuminate\\Support\\Facades\\DB::select(\'select * from patient where pat_email = ? and patient_password = ?\',
    [$email,$password]);

    $doctorResult = \\Illuminate\\Support\\Facades\\DB::select(\'select * from doctor where doc_email = ? and doc_pass = ?\',[$email,$password]);


    // if patient exist [correct email and password ]
    if($result){
        // because the result is a list of only one element, we store that element in patient variable
        $patient = $result[0];

        // create new token for patient
        $token = \\App\\Helpers\\MyTokenManager::createPatientToken($patient->pat_id);



        // return token like  [3|dkjfbvjfkbvdfkjbv89yrhfb]
        return [
            \'msg\' => \'logged In successfully\',
            \'user\' => \'patient\',
            \'token\' => $token,
        ];
    }
    else if($doctorResult) {
        $doctor = $doctorResult[0];
        $doctorToken = \\App\\Helpers\\DoctorsTokenManager::createDoctorToken($doctor->doc_id);

        return [
            \'msg\' => \'Logged In successfully\',
            \'user\' => \'doctor\',
            \'token\' => $doctorToken,
        ];

    }
    // if patient does not exist [0 rows returned]
    else{
        return [
            \'error\'=> \'wrong email or password\'
        ];
    }

}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000036b0000000000000000";}";s:4:"hash";s:44:"pTGcMh6W122907Xjs1yTxq71eg3IKrj4a5HOMNVJ7hQ=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::FkTDDUO6fVYyTeEA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CgOn9HtnOfD6RykY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/profile-patient',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'MyAuthAPI',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:448:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:229:"function(\\Illuminate\\Http\\Request $request){
        // get $patient data from DB
        $patient = \\App\\Helpers\\MyTokenManager::currentPatient($request);
        return [
            \'patient\' => $patient
        ];
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000036e0000000000000000";}";s:4:"hash";s:44:"ja0F68aNoDwyQ+TX2GYe0oSaS+E3e4h1C7ExMRW66M8=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::CgOn9HtnOfD6RykY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RB7XKhvHeUe1fgGC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/logout-patient',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'MyAuthAPI',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:420:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:201:"function(\\Illuminate\\Http\\Request $request){
        \\App\\Helpers\\MyTokenManager::removePatientToken($request);
        return [
            \'message\' => \'logged out successfully\'
        ];
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003700000000000000000";}";s:4:"hash";s:44:"XJp/QNg6p/3wDYmcFkFnV2gSFyro0jDkfVHcPowW3iI=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::RB7XKhvHeUe1fgGC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tCznAs4rPJgvO5fL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/available-tests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'MyAuthAPI',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:990:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:771:"function(){

        // get all tests from tests table in DB
        $result = \\Illuminate\\Support\\Facades\\DB::select(\'select * from test\');

        // declare $data array
        $data = [];

        // for loop in every element and store its features values [test_id, test_name, test_fee] and store in $data [associative array]
        foreach ( $result as $childCat ) {
            $data[] =
            [
                \'test_id\' =>  $childCat->test_id,
                \'test-name\' =>  $childCat->test_name,
            ];
        }

        // retrieve json object
        // return response()->json([ $data ]);


        // retrieve json object -> $data in not in [] because it is already an array
        return \\response($data,200);
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003720000000000000000";}";s:4:"hash";s:44:"uUnhyUA8Aozg0xBcH8IQEra7tZZzkzG1xy5sRFKQzoQ=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::tCznAs4rPJgvO5fL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0i6MkJxKPJMHSvCK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/test-reservation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'MyAuthAPI',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:1801:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1581:"function(\\Illuminate\\Http\\Request $request){

        // get data from request body
        $test_name = $request->test_name;
        $test_date = $request->test_date;
        $test_time = $request->test_time;
        $test_patient_health_name = $request->test_patient_health_name;

        // search for test_id
        $test_id_array = \\Illuminate\\Support\\Facades\\DB::select(\'select test_id from test where test_name = ?\',[$test_name]);
        // search for healthcare_id
        $test_patient_health_id_array = \\Illuminate\\Support\\Facades\\DB::select(\'select hc_id from healthcare_center where hc_name = ?\',
        [$test_patient_health_name]);

        // get patient data from autherization header
        $patient = \\App\\Helpers\\MyTokenManager::currentPatient($request);

        // get test_id and hc_id from arrays retrieved from DB
        $test_id = $test_id_array[0]->test_id;
        $test_patient_health_id = $test_patient_health_id_array[0]->hc_id;

        // insert into DB
        $result = \\Illuminate\\Support\\Facades\\DB::insert("insert into test_patient(pat_id,test_id,pat_test_date,pat_test_time,test_patient_health) values (?,?,?,?,?)",
        [$patient->pat_id,$test_id,$test_date,$test_time,$test_patient_health_id]);

        // if successfully inserted
        if($result){
            return \\response([
                \'msg\' => \'successful test reservation\'
            ]);
        }
        else {
            return \\response([
                \'msg\' => \'failed test reservation\'
                ]);
        }
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003740000000000000000";}";s:4:"hash";s:44:"On00ZrI5ePhwslTGWIof9r4MuUeeC7oekZniDeDYqS4=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0i6MkJxKPJMHSvCK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Dzt6f5OiPHooNR3V' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/available-vaccines',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'MyAuthAPI',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:1002:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:783:"function(){

        // get all dose from doses table in DB
        $result = \\Illuminate\\Support\\Facades\\DB::select(\'select * from dose\');

        // declare $data array
        $data = [];

        // for loop in every element and store its features values [dose_id, dose_number, vaccine_name] and store in $data [associative array]
        foreach ( $result as $childCat ) {
            $data[] =
            [
                \'dose_id\' =>  $childCat->dose_id,
                \'vaccine_name\' => $childCat->vaccine_name,
            ];
        }

        // retrieve json object
        // return response()->json([ $data ]);


        // retrieve json object -> $data in not in [] because it is already an array
        return \\response($data,200);

    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003760000000000000000";}";s:4:"hash";s:44:"XwEYqLw1XljuqI4OojyePApqP2ajFVG62DnGw8COpgs=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Dzt6f5OiPHooNR3V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P2pYqNtR6BOyKR9B' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dose-reservation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'MyAuthAPI',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:1624:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1404:"function(\\Illuminate\\Http\\Request $request){

        // get data from request body
        $dose_name = $request->dose_name;
        $dose_date = $request->dose_date;
        $dose_time = $request->dose_time;
        $dose_patient_health_name = $request->dose_patient_health_name;


        // search for dose_id
        $dose_id_array = \\Illuminate\\Support\\Facades\\DB::select(\'select dose_id from dose where vaccine_name = ?\',[$dose_name]);
        // search for healthcare_id
        $dose_patient_health_id_array = \\Illuminate\\Support\\Facades\\DB::select(\'select hc_id from healthcare_center where hc_name = ?\',
        [$dose_patient_health_name]);


        // get dose_id and hc_id from arrays retrieved from DB
        $dose_id = (int)$dose_id_array[0]->dose_id;
        $dose_patient_health_id = (int)$dose_patient_health_id_array[0]->hc_id;

        // get patient_id from autherization header
        $patient = \\App\\Helpers\\MyTokenManager::currentPatient($request);

        $result = \\Illuminate\\Support\\Facades\\DB::insert(\'insert into Dose_patient values (?,?,?,?,?)\',
        [$dose_id,$patient->pat_id,$dose_date,$dose_time,$dose_patient_health_id]);

        if($result){
            return \\response([\'msg\' => \'successful dose reservation\']);

        }
        else {
            return \\response([\'msg\' => \'failed dose reservation\']);
        }

    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003780000000000000000";}";s:4:"hash";s:44:"6ZnJQmIMDs0ZqK4iL2yuAbBsr5p8fzJDGDa/C6lq2Ic=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::P2pYqNtR6BOyKR9B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YJdlinQC0u1BSk2r' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/avaiable-healthcare-centers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'MyAuthAPI',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:650:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:431:"function(){
        $result = \\Illuminate\\Support\\Facades\\DB::select(\'select * from healthcare_center\');

        $hospitals = [];

        foreach ($result as $hosital){
            $hospitals [] = [
                "hc_id" => $hosital->hc_id,
                "hc_name" => $hosital->hc_name,
                "hc_address" => $hosital->hc_address
            ];
        }
        return \\response($hospitals,200);
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000037a0000000000000000";}";s:4:"hash";s:44:"IDE0amjp+KovCgKK+bWCqyOXNOTnM9vhpZZAUJ6U5bM=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::YJdlinQC0u1BSk2r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::llwSiyLmONuKZZ1y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/available-doctors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'MyAuthAPI',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:1121:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:902:"function(){
        $result = \\Illuminate\\Support\\Facades\\DB::select(\'select * from doctor\');
        // declare $data array
        $data = [];

        // for loop in every element and store its features values [test_id, test_name, test_fee] and store in $data [associative array]
        foreach ( $result as $childCat ) {
            $data[] =
            [
                \'doc_id\' =>  $childCat->doc_id,
                \'doc_fname\' =>  $childCat->doc_fname,
                \'doc_lname\' =>  $childCat->doc_lname,
                \'doc_phone\' =>  $childCat->doc_phone,
                \'doc_email\' =>  $childCat->doc_email,
                \'doc_sex\' =>  $childCat->doc_sex,
                \'doc_age\' =>  $childCat->doc_age,
            ];
        }


        // retrieve json object -> $data in not in [] because it is already an array
        return \\response($data,200);
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000037c0000000000000000";}";s:4:"hash";s:44:"PX21KOEE+GmTtLtb3r1H++fOphit3bF3w0vWibTASFE=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::llwSiyLmONuKZZ1y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yk8JFrIfuJfGdvg8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get-tests-reserved',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'MyAuthAPI',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:1435:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1215:"function(\\Illuminate\\Http\\Request $request){

        $patientId = \\App\\Helpers\\MyTokenManager::currentPatient($request)->pat_id;

        $result = \\Illuminate\\Support\\Facades\\DB::select(\'select t.test_name,tp.res_id ,hc.hc_name, tp.pat_test_date, tp.pat_test_time
        from test t
        inner join test_patient tp
        on  tp.test_id = t.test_id
        inner join healthcare_center hc
        on hc.hc_id = tp.test_patient_health
        where tp.pat_id = ?\',[$patientId]);

        // declare $data array
        $tests = [];

        // for loop in every element and store its features values [test_id, test_name, test_fee] and store in $data [associative array]
        foreach ( $result as $childCat ) {
            $tests[] =
            [
                \'test_name\' =>  $childCat->test_name,
                \'pat_test_date\' =>  $childCat->pat_test_date,
                \'pat_test_time\' =>  $childCat->pat_test_time,
                \'hc_name\' =>  $childCat->hc_name,
                \'res_id\' => $childCat->res_id
            ];
        }


        // retrieve json object -> $data in not in [] because it is already an array
        return \\response($tests,200);
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000037e0000000000000000";}";s:4:"hash";s:44:"PiqdVQydyuwbcoXWY+MkXXSmrqiS/InUv6ZlD3LeTDo=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::yk8JFrIfuJfGdvg8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T8QJc8d0i3L8Ax7h' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/delete-test-reservation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'MyAuthAPI',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:745:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:526:"function(\\Illuminate\\Http\\Request $request){

        // get data from request body
        $res_id = $request->res_id;


        $result = \\Illuminate\\Support\\Facades\\DB::delete(\'delete from test_patient where res_id = ?\',
        [$res_id]);

        if($result){
            return [
                \'msg\' => \'deleted successfully\'
            ];
        }else{
            return [
                \'msg\' => \'unsuccessfull operation due to that reservation does not exist\'
            ];
        }

    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003800000000000000000";}";s:4:"hash";s:44:"z48DppA8w15NPxE5937n+SvwsySRtAav2zLUHKH3txE=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::T8QJc8d0i3L8Ax7h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UgEcPXnIb3xyRxTk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get-dose-reservation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'MyAuthAPI',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:1384:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1164:"function(\\Illuminate\\Http\\Request $request){

        $patientId = \\App\\Helpers\\MyTokenManager::currentPatient($request)->pat_id;

        $result = \\Illuminate\\Support\\Facades\\DB::select(\'select d.vaccine_name, dp.pat_dose_date, dp.pat_dose_time, hc.hc_name
        from dose d
        inner join Dose_patient dp
        on  d.dose_id = dp.dose_id
        inner join healthcare_center hc
        on hc.hc_id = dp.dose_patient_health
        where dp.pat_id = ?\',[$patientId]);

        // declare $data array
        $tests = [];

        // for loop in every element and store its features values [test_id, test_name, test_fee] and store in $data [associative array]
        foreach ( $result as $childCat ) {
            $tests[] =
            [
                \'dose_name\' =>  $childCat->vaccine_name,
                \'pat_test_date\' =>  $childCat->pat_dose_date,
                \'pat_test_time\' =>  $childCat->pat_dose_time,
                \'hc_name\' =>  $childCat->hc_name,
            ];
        }


        // retrieve json object -> $data in not in [] because it is already an array
        return \\response($tests,200);
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003820000000000000000";}";s:4:"hash";s:44:"WpdubflfUuXanpROX+Gz0yZIETkrj+PpesZv3a4qDYE=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::UgEcPXnIb3xyRxTk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Va2olIqKEWowprSz' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/update-dose-reservation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'MyAuthAPI',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:1791:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1571:"function(\\Illuminate\\Http\\Request $request){

        // get patient id from autherization header
        $patientId = \\App\\Helpers\\MyTokenManager::currentPatient($request)->pat_id;

        // get editable user inputs
        $dose_name = $request->dose_name;
        $dose_date = $request->dose_date;
        $dose_time = $request->dose_time;
        $dose_patient_health_name = $request->dose_patient_health_name;

        // search for dose_id
        $dose_id_array = \\Illuminate\\Support\\Facades\\DB::select(\'select dose_id from dose where vaccine_name = ?\',[$dose_name]);
        // search for healthcare_id
        $dose_patient_health_id_array = \\Illuminate\\Support\\Facades\\DB::select(\'select hc_id from healthcare_center where hc_name = ?\',
        [$dose_patient_health_name]);


        // get dose_id and hc_id from arrays retrieved from DB
        $dose_id = (int)$dose_id_array[0]->dose_id;
        $dose_patient_health_id = (int)$dose_patient_health_id_array[0]->hc_id;

        $result = \\Illuminate\\Support\\Facades\\DB::update("
        update Dose_patient
        set pat_dose_date = ?,
            pat_dose_time = ?,
            dose_patient_health = ?,
            dose_id = ?
            where pat_id = ?
        ",[$dose_date,$dose_time,$dose_patient_health_id,$dose_id,$patientId]);

        if($result){
            return [
                \'msg\' => \'successful update\'
            ];
        }
        else {
            return [
                \'msg\' => \'unsuccessful update\'
            ];
        }
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003840000000000000000";}";s:4:"hash";s:44:"RTmYxBdO60O2SfVF8IKl9GhXSCwIWXXOQffS+lQOghI=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Va2olIqKEWowprSz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TKKnu3oWeYs0xvUH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/if-dose-reserved',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'MyAuthAPI',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:726:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:507:"function(\\Illuminate\\Http\\Request $request){
        $patientId = \\App\\Helpers\\MyTokenManager::currentPatient($request)->pat_id;
        // get all tests from tests table in DB
        $result = \\Illuminate\\Support\\Facades\\DB::select(\'select * from Dose_patient where pat_id = ?\',[$patientId]);

        if($result){
            return [
                \'msg\' => \'yes\'
            ];
        }
        else {
            return [
                \'msg\' => \'no\'
            ];
        }

    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003860000000000000000";}";s:4:"hash";s:44:"wLR3qHdUb4aO3s8vYPwO61QY0brTNEniwfnIeBqCo4w=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::TKKnu3oWeYs0xvUH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W0JuyQS7I5OB5HgV' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/delete-dose-reservation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'MyAuthAPI',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:767:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:548:"function(\\Illuminate\\Http\\Request $request){

        // get patient id from autherization header
        $patientId = \\App\\Helpers\\MyTokenManager::currentPatient($request)->pat_id;

        $result = \\Illuminate\\Support\\Facades\\DB::delete(\'delete from Dose_patient where pat_id = ?\',[$patientId]);

        if($result){
            return [
                \'msg\' => \'deleted successfully\'
            ];
        }
        else {
            return [
                \'msg\' => \'unsuccessful operation\'
            ];
        }
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003880000000000000000";}";s:4:"hash";s:44:"SnNKs9ahW9aWbg0vwOX7Jn6Q6vqahxRxSAKsGzFusmA=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::W0JuyQS7I5OB5HgV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7qEYECJIuYoJMwpq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/contact-with-doctor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'MyAuthAPI',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:1309:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1089:"function(\\Illuminate\\Http\\Request $request){

        // get patient id from autherization header
        $patientId = \\App\\Helpers\\MyTokenManager::currentPatient($request)->pat_id;

        $doctor_email = $request->doctor_email;
        $msg = $request->msg;
        $reply = "";

        $query = \\Illuminate\\Support\\Facades\\DB::select(\'select doc_id from doctor where doc_email = ?\',[$doctor_email]);

        $doctor_id = $query[0]->doc_id;

        $number_of_msg = \\Illuminate\\Support\\Facades\\DB::select("select count(*) as num_msgs from doc_pat");



        $result = \\Illuminate\\Support\\Facades\\DB::insert(\'insert into doc_pat VALUES (?,?,?,?,?)\',[$doctor_id,$patientId,$msg,$reply,$number_of_msg[0]->num_msgs+1]);

        \\Illuminate\\Support\\Facades\\Mail::to($doctor_email)->send(new \\App\\Mail\\DoctortContact($msg,$doctor_email));

        if($result){
            return [
                \'msg\' => \'successfully\'
            ];
        }
        else{
            return [
                \'msg\' => \'unsuccessfully\'
            ];
        }
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000038a0000000000000000";}";s:4:"hash";s:44:"bRJUfFSXLAIvq5nsNadljG+2li8zAzq/SqcnkxysgN8=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::7qEYECJIuYoJMwpq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UvNzESCHc0yg31ia' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/messages_of_patient',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'MyAuthAPI',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:1061:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:842:"function(\\Illuminate\\Http\\Request $request){

        $patientId = \\App\\Helpers\\MyTokenManager::currentPatient($request)->pat_id;

        $result = \\Illuminate\\Support\\Facades\\DB::select("select doctor.doc_fname as doctor_first_name ,doctor.doc_lname as doctor_last_name,doc_pat.message as message,doc_pat.reply as reply
        from doc_pat , doctor
        where pat_id = ?
        and doc_pat.doc_id = doctor.doc_id",[$patientId]);

        $messagesData = [];

        foreach ($result as $msg){
            $messagesData[] = [
                \'doctor_first_name\' => $msg->doctor_first_name,
                \'doctor_last_name\' => $msg->doctor_last_name,
                \'message\' => $msg->message,
                \'reply\' => $msg->reply,
            ];
        }

        return \\response($messagesData,200);

    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000038c0000000000000000";}";s:4:"hash";s:44:"15D3Pds3G2EOFyIQXIzc0r1LjEIICkI+mwi7XO2Qsm4=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::UvNzESCHc0yg31ia',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I8TMY8yS1FnYSrky' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/doctor_data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'DoctorAuthAPI',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:412:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:193:"function(\\Illuminate\\Http\\Request $request){
        $doctor = \\App\\Helpers\\DoctorsTokenManager::currentDoctor($request);
        return [
            \'doctor\' => $doctor,
        ];
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000038e0000000000000000";}";s:4:"hash";s:44:"b4wSTY4ha5p/yvENF73w9IRSZY95eos0To9Xi57wmCw=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::I8TMY8yS1FnYSrky',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IBiKPNdCdH54Lsbc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/messages_of_doctor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'DoctorAuthAPI',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:1258:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1038:"function(\\Illuminate\\Http\\Request $request){
        // get doctor_id to search for his patient\'s messages
        $doctor_id = \\App\\Helpers\\DoctorsTokenManager::currentDoctor($request)->doc_id;

        // retreive messages of doctor
        $msgsData = \\Illuminate\\Support\\Facades\\DB::select("select * from doc_pat where doc_id = ?",[$doctor_id]);

        // declare $data array
        $data = [];

        // for loop in every element and store its features values [test_id, test_name, test_fee] and store in $data [associative array]
        foreach ( $msgsData as $childCat ) {
            $data[] =
            [
                \'doc_id\' =>  $childCat->doc_id,
                \'pat_id\' =>  $childCat->pat_id,
                \'message\' =>  $childCat->message,
                \'reply\' =>  $childCat->reply,
                \'msg_id\' =>  $childCat->msg_id,
            ];
        }
        // retrieve json object -> $data in not in [] because it is already an array
        return \\response($data,200);

    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003900000000000000000";}";s:4:"hash";s:44:"u8kT5TslNvsJeXsomBrE3L5eZHptguxEpviVgDiwCN0=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::IBiKPNdCdH54Lsbc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oE7M806owkzgPB7M' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/reply_to_message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'DoctorAuthAPI',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:932:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:713:"function(\\Illuminate\\Http\\Request $request){
        // get doctor_id to search for his patient\'s messages
        $doctor_id = \\App\\Helpers\\DoctorsTokenManager::currentDoctor($request)->doc_id;

        // get message_id
        $msg_id = $request->msg_id;


        $result = \\Illuminate\\Support\\Facades\\DB::update(
            "update doc_pat
            SET reply = ?
            WHERE msg_id = ? and doc_id = ?",
            [$request->reply,$msg_id,$doctor_id]
        );

        if($result){

        return [
                \'msg\' => "successfully",
        ];
        }
        else {
            return [
                \'msg\' => \'failed\',
            ];
        }



    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003920000000000000000";}";s:4:"hash";s:44:"Nqeg13Rg3mHQWxjh83Ox6QVAWjG0BqDxf+Z8qo3ZRo0=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::oE7M806owkzgPB7M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gj0d8XAVkNsdVynR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/doctor_logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'DoctorAuthAPI',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:425:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:206:"function(\\Illuminate\\Http\\Request $request){
        \\App\\Helpers\\DoctorsTokenManager::removeDoctorToken($request);
        return [
            \'msg\' => \'doctor, loggout successfully\'
        ];
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003940000000000000000";}";s:4:"hash";s:44:"r3FsGDvkxapdGpGDMG7Jv2ezXJwgx5xBTnys2gXsgYI=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::gj0d8XAVkNsdVynR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5hLYwV3npfKDWmk8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/send-reset-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:689:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:470:"function(\\Illuminate\\Http\\Request $request){
    $email = $request->email;

    $result = \\Illuminate\\Support\\Facades\\DB::select(\'select * from patient where pat_email = ?\',[$email]);

    if(!$result){
        return [
            \'msg\' => \'this email is not registered\'
        ];
    }

    \\Illuminate\\Support\\Facades\\Mail::to($email)->send(new \\App\\Mail\\CloudHostingProduct($email));

    return [
        \'msg\' => \'Email sent Successfully\'
    ];
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000036d0000000000000000";}";s:4:"hash";s:44:"gg/1d53NEDaJxp2wez1vzYlamr7dPMhocw0x+qSb9s4=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::5hLYwV3npfKDWmk8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8RxFMdDBv5ZUJcao' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/available-vaccines-no-middleware',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:929:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:710:"function(){

    // get all tests from tests table in DB
    $result = \\Illuminate\\Support\\Facades\\DB::select(\'select * from dose\');

    // declare $data array
    $data = [];

    // for loop in every element and store its features values [test_id, test_name, test_fee] and store in $data [associative array]
    foreach ( $result as $childCat ) {
        $data[] =
        [
            \'dose_id\' =>  $childCat->dose_id,
            \'vaccine_name\' => $childCat->vaccine_name,
        ];
    }

    // retrieve json object
    // return response()->json([ $data ]);


    // retrieve json object -> $data in not in [] because it is already an array
    return \\response($data,200);

}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003970000000000000000";}";s:4:"hash";s:44:"uy3YNIk6WH6+7AT/XVy2ZQArXaJ09dhVayOmnWeI2aw=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::8RxFMdDBv5ZUJcao',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2anBk0td0MHzT5hM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/available-tests-no-middleware',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:847:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:628:"function(){

    // get all tests from tests table in DB
    $result = \\Illuminate\\Support\\Facades\\DB::select(\'select * from test\');

    // declare $data array
    $data = [];

    // for loop in every element and store its features values [test_id, test_name, test_fee] and store in $data [associative array]
    foreach ( $result as $childCat ) {
        $data[] =
        [
            \'test_id\' =>  $childCat->test_id,
            \'test_name\' =>  $childCat->test_name,
        ];
    }


    // retrieve json object -> $data in not in [] because it is already an array
    return \\response($data,200);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003990000000000000000";}";s:4:"hash";s:44:"YnSJmB5F9nTavVtP+AIs3XC4oBlqO8HwFXJc9U6Mrdk=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::2anBk0td0MHzT5hM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::243db1F8lm0tD3Vt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/all-patients-registered',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:1261:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1041:"function(){
    // get all tests from tests table in DB
    $result = \\Illuminate\\Support\\Facades\\DB::select(\'select * from patient\');

    // declare $data array
    $data = [];

    // for loop in every element and store its features values [test_id, test_name, test_fee] and store in $data [associative array]
    foreach ( $result as $childCat ) {
        $data[] =
        [
            \'pat_id\' =>  $childCat->pat_id,
            \'pat_fname\' =>  $childCat->pat_fname,
            \'pat_lname\' =>  $childCat->pat_lname,
            \'pat_age\' =>  $childCat->pat_age,
            \'pat_address\' =>  $childCat->pat_address,
            \'pat_phone\' =>  $childCat->pat_phone,
            \'pat_email\' =>  $childCat->pat_email,
            \'pat_DOF\' =>  $childCat->pat_DOF,
            \'pat_SSN\' =>  $childCat->pat_SSN,
            \'patient_password\' =>  $childCat->patient_password,
        ];
    }


    // retrieve json object -> $data in not in [] because it is already an array
    return \\response($data,200);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000039b0000000000000000";}";s:4:"hash";s:44:"VXSD7O6IMaKBOk9U/I4rsi7z8+7GEc+HJUF0QbI1Ugo=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::243db1F8lm0tD3Vt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yw3dTrWHgDvdUMd5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/all-patients-logined',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:1133:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:914:"function(){
    // inner join to show pat_name
    $result = \\Illuminate\\Support\\Facades\\DB::select(\'select pt.id, p.pat_fname, p.pat_lname, pt.patient_id, pt.token FROM patient AS p
    INNER JOIN patient_token AS pt ON pt.patient_id = p.pat_id\');

    //where p.pat_id = 4


     // declare $data array
    $data = [];

    // for loop in every element and store its features values [test_id, test_name, test_fee] and store in $data [associative array]
    foreach ( $result as $childCat ) {
        $data[] =
        [
            \'token_id\' =>  $childCat->id,
            \'pat_id\' =>  $childCat->patient_id,
            \'pat_fname\' =>  $childCat->pat_fname,
            \'pat_lname\' =>  $childCat->pat_lname,
            \'token\' => $childCat->token

        ];
    }


    // retrieve json object -> $data in not in [] because it is already an array
    return \\response($data,200);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000039d0000000000000000";}";s:4:"hash";s:44:"n/MrDleOWb7HGNSAakipVQQ7P12Ag7c1CJM/8gsO/ZY=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::yw3dTrWHgDvdUMd5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FVZ4a9H5F2FzFc6K' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get-all-test-reservation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:1374:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1154:"function(){

    $result = \\Illuminate\\Support\\Facades\\DB::select(\'select p.pat_fname,p.pat_lname, p.pat_email, t.test_name, tp.pat_test_date , tp.pat_test_time , hc.hc_name
	from patient p
	inner join test_patient tp
    on p.pat_id = tp.pat_id
    inner join test t
    on  tp.test_id = t.test_id
    inner join healthcare_center hc
    on hc.hc_id = tp.test_patient_health\');

    // declare $data array
    $tests = [];

    // for loop in every element and store its features values [test_id, test_name, test_fee] and store in $data [associative array]
    foreach ( $result as $childCat ) {
        $tests[] =
        [
            \'pat_fname\' =>  $childCat->pat_fname,
            \'pat_lname\' =>  $childCat->pat_lname,
            \'pat_email\' =>  $childCat->pat_email,
            \'test_name\' =>  $childCat->test_name,
            \'pat_test_date\' =>  $childCat->pat_test_date,
            \'pat_test_time\' =>  $childCat->pat_test_time,
            \'hc_name\' =>  $childCat->hc_name,
        ];
    }


    // retrieve json object -> $data in not in [] because it is already an array
    return \\response($tests,200);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000039f0000000000000000";}";s:4:"hash";s:44:"VLJJ+O3oTJ2Reqe35ZIPl+tBIMSCE1a72JuvxFE8LvI=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::FVZ4a9H5F2FzFc6K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6htmXJU2xT0q7Xv4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get-all-dose-reservation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:1369:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1149:"function(){

    $result = \\Illuminate\\Support\\Facades\\DB::select(\'select p.pat_fname,p.pat_lname, p.pat_email, d.vaccine_name, dp.pat_dose_date , dp.pat_dose_time , hc.hc_name
	from patient p
	inner join Dose_patient dp
    on p.pat_id = dp.pat_id
    inner join dose d
    on  d.dose_id = dp.dose_id
    inner join healthcare_center hc
    on hc.hc_id = dp.dose_patient_health\');

    // declare $data array
    $tests = [];

    // for loop in every element and store its features values [test_id, test_name] and store in $data [associative array]
    foreach ( $result as $childCat ) {
        $tests[] =
        [
            \'pat_fname\' =>  $childCat->pat_fname,
            \'pat_lname\' =>  $childCat->pat_lname,
            \'pat_email\' =>  $childCat->pat_email,
            \'vaccine_name\' =>  $childCat->vaccine_name,
            \'pat_dose_date\' =>  $childCat->pat_dose_date,
            \'pat_dose_time\' =>  $childCat->pat_dose_time,
            \'hc_name\' =>  $childCat->hc_name,
        ];
    }


    // retrieve json object -> $data in not in [] because it is already an array
    return \\response($tests);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003a10000000000000000";}";s:4:"hash";s:44:"2LPHg2nT44jZ0oHTAenYzgBbd8OAOHuHLaTbygW/BAk=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::6htmXJU2xT0q7Xv4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7X0rlxjzybCVZ0dI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:262:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003a40000000000000000";}";s:4:"hash";s:44:"EYKbdVoCdvA6v6ZLjo6dJRW+Nad9ciAeXfNbJbcrzqY=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7X0rlxjzybCVZ0dI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gq71H6fGAvymIMrh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'logoutmiddle',
        ),
        'uses' => 'App\\Http\\Controllers\\Login_Controller@showLogin',
        'controller' => 'App\\Http\\Controllers\\Login_Controller@showLogin',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gq71H6fGAvymIMrh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ot4Q8vRUifLpXPjU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Login_Controller@login',
        'controller' => 'App\\Http\\Controllers\\Login_Controller@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ot4Q8vRUifLpXPjU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Op5HwiBG6by57urr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'logoutmiddle',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:263:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:45:"function () {
    return \\view(\'register\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003a80000000000000000";}";s:4:"hash";s:44:"2YKw8/EZzr9CC0cjlVjj9L/NNlRoPsKG2v8Nmw4DvJo=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Op5HwiBG6by57urr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RegisterController@registration',
        'controller' => 'App\\Http\\Controllers\\RegisterController@registration',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zbz30njhXgZhd4A2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Login_Controller@logout',
        'controller' => 'App\\Http\\Controllers\\Login_Controller@logout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Zbz30njhXgZhd4A2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact_us' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact_us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contact_us',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'contact_us',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@send',
        'controller' => 'App\\Http\\Controllers\\ContactController@send',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'send.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::89JF8vkt5XLhllIp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loginmiddle',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@getData',
        'controller' => 'App\\Http\\Controllers\\ProfileController@getData',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::89JF8vkt5XLhllIp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7RxDIghBqK2QrRSl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Editprofile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loginmiddle',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@getEditData',
        'controller' => 'App\\Http\\Controllers\\ProfileController@getEditData',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7RxDIghBqK2QrRSl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::niW5JfflofkNCH5R' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'updateprofile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loginmiddle',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@updateprofile',
        'controller' => 'App\\Http\\Controllers\\ProfileController@updateprofile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::niW5JfflofkNCH5R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uZTsnYnhJt24aVlX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loginmiddle',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:262:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'service\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003b10000000000000000";}";s:4:"hash";s:44:"yYxGpB/NOfTIcJkxQvGrQaQptloAxtf4CXz55JMWJ9A=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::uZTsnYnhJt24aVlX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pi2G23XOW1PkTlRY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'new_dose',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loginmiddle',
        ),
        'uses' => 'App\\Http\\Controllers\\BookDoseController@dose',
        'controller' => 'App\\Http\\Controllers\\BookDoseController@dose',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pi2G23XOW1PkTlRY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bookDose' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'bookDose',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BookDoseController@bookDose',
        'controller' => 'App\\Http\\Controllers\\BookDoseController@bookDose',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bookDose',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GttlTPMVJ52D8q4H' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact_doc',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:377:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:158:"function () {
    $doc_name = \\Illuminate\\Support\\Facades\\DB::select(\'select * from doctor\');
    return \\view(\'contact_doc\')->with(\'doc_names\', $doc_name);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003b50000000000000000";}";s:4:"hash";s:44:"Vi2kmwm23UvEuSzEDPwUpm4//GvFGLSUgy7HJJnb9Jo=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::GttlTPMVJ52D8q4H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sendDoc.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sendDoc',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactDocController@sendDoc',
        'controller' => 'App\\Http\\Controllers\\ContactDocController@sendDoc',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sendDoc.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1qUuzB3ostQgcgZ8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-dashbord',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loginmiddle',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@admin_dashbord',
        'controller' => 'App\\Http\\Controllers\\adminController@admin_dashbord',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1qUuzB3ostQgcgZ8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7Gk1a4qFV70VGBxE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_doc_data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loginmiddle',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@admin_doc_data',
        'controller' => 'App\\Http\\Controllers\\adminController@admin_doc_data',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7Gk1a4qFV70VGBxE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EcKrbbRWfipfNAxs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_doc_data/{doc_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loginmiddle',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@delete_doc',
        'controller' => 'App\\Http\\Controllers\\adminController@delete_doc',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::EcKrbbRWfipfNAxs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ym3stsIBvBkQfYWL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_doc_msg',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loginmiddle',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@Show_admin_doc_msg',
        'controller' => 'App\\Http\\Controllers\\adminController@Show_admin_doc_msg',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Ym3stsIBvBkQfYWL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uq14JexlCAw66h9V' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin_doc_msg',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loginmiddle',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@admin_doc_msg',
        'controller' => 'App\\Http\\Controllers\\adminController@admin_doc_msg',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::uq14JexlCAw66h9V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lCFHbSpIavBfklwT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_add_doc',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loginmiddle',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@show_admin_add_doc_form',
        'controller' => 'App\\Http\\Controllers\\adminController@show_admin_add_doc_form',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lCFHbSpIavBfklwT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GDnvOOyQtkFO0l4t' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin_add_doc',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loginmiddle',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@admin_add_doc',
        'controller' => 'App\\Http\\Controllers\\adminController@admin_add_doc',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::GDnvOOyQtkFO0l4t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K5qVpnGIizcNgTxS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_dose_data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loginmiddle',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@admin_dose_data',
        'controller' => 'App\\Http\\Controllers\\adminController@admin_dose_data',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::K5qVpnGIizcNgTxS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RD4wy7CxL4TlfH0U' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_dose_data_update/{pat_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loginmiddle',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@update_dose',
        'controller' => 'App\\Http\\Controllers\\adminController@update_dose',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RD4wy7CxL4TlfH0U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6Mq44BVgV057NSeZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin_update_dose',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loginmiddle',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@update_dose_data',
        'controller' => 'App\\Http\\Controllers\\adminController@update_dose_data',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6Mq44BVgV057NSeZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0T8xUehsa1UMdJoH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_dose_data_del/{pat_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loginmiddle',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@delete_dose',
        'controller' => 'App\\Http\\Controllers\\adminController@delete_dose',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::0T8xUehsa1UMdJoH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SZYeCkxjPvUpP1Sl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_test_data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loginmiddle',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@show_admin_test_data',
        'controller' => 'App\\Http\\Controllers\\adminController@show_admin_test_data',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SZYeCkxjPvUpP1Sl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m4NxCOcb32lI0Sov' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin_test_data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loginmiddle',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@admin_test_data',
        'controller' => 'App\\Http\\Controllers\\adminController@admin_test_data',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::m4NxCOcb32lI0Sov',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n5YkJYlQl0FmRVGK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'new_test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TestFormController@new_test_display',
        'controller' => 'App\\Http\\Controllers\\TestFormController@new_test_display',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::n5YkJYlQl0FmRVGK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::So8VyDI4aI8pFNhC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'new_test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TestFormController@new_test',
        'controller' => 'App\\Http\\Controllers\\TestFormController@new_test',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::So8VyDI4aI8pFNhC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ux1zuMFBB8ZTRdtD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'my_tests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MyTestController@mytest_display',
        'controller' => 'App\\Http\\Controllers\\MyTestController@mytest_display',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ux1zuMFBB8ZTRdtD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZKJlcfQRNMYsfTNX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'delete/{res_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MyTestController@delete',
        'controller' => 'App\\Http\\Controllers\\MyTestController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZKJlcfQRNMYsfTNX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TfpSIetgrLo474Pe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test_option',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:266:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:48:"function () {
    return \\view(\'test_option\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003c90000000000000000";}";s:4:"hash";s:44:"zOKKRsHwSzg89fQP2HOfzKKkfM15OSh5vN6S7B4evr0=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TfpSIetgrLo474Pe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jdczFfEZh8POy2wD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update_test/{res_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TestFormController@showdata',
        'controller' => 'App\\Http\\Controllers\\TestFormController@showdata',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::jdczFfEZh8POy2wD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::icdVXPbMkPj9UxKV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_test/{res_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TestFormController@update_data',
        'controller' => 'App\\Http\\Controllers\\TestFormController@update_data',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::icdVXPbMkPj9UxKV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mpvPVWpx7YLaogoR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'doc_profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loginmiddle',
        ),
        'uses' => 'App\\Http\\Controllers\\docProfileController@docProfile',
        'controller' => 'App\\Http\\Controllers\\docProfileController@docProfile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mpvPVWpx7YLaogoR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jmJhltZqPqnV40Jj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'saveReply/{msg_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loginmiddle',
        ),
        'uses' => 'App\\Http\\Controllers\\docProfileController@saveReply',
        'controller' => 'App\\Http\\Controllers\\docProfileController@saveReply',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::jmJhltZqPqnV40Jj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bA4INAa3ssx3ciHz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reset-password_api/{email}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:331:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:112:"function ($pat_email) {
    $email = $pat_email;
    return \\view(\'reset_passpword_api\', [\'email\' => $email]);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003cf0000000000000000";}";s:4:"hash";s:44:"84qtNuTluaOCNtVjWruGTZBQE4m/Q0PfdvPAgJwB7v8=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bA4INAa3ssx3ciHz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bCjK94B9fV2io1E4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'submit-new-passord-api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:672:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:453:"function () {
    $email = \\request(\'email\');
    $password = \\request(\'password\');
    //return "$email and $password";
    //$result = DB::select(\'select * from patient where pat_email = ?\',[$email]);
    //$result = DB::update(\'update patient set patient_password = ? where pat_email = ?\',[$password,$email]);
    $result = \\Illuminate\\Support\\Facades\\DB::update(\'update patient set patient_password = ?\', [$password, $email]);

    return $result;
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003d10000000000000000";}";s:4:"hash";s:44:"a9Bj29AkikRXBN2deut1XcTQGtH/38bpEkhu8hpwFj8=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bCjK94B9fV2io1E4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bIMRDSXxYiv1vkxc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forgetPassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:271:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:53:"function () {
    return \\view(\'forget-send-mail\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003d30000000000000000";}";s:4:"hash";s:44:"JnumM3hkEhNUsSVjbtIYdWWj7cmzSarGaIw0ELik07s=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bIMRDSXxYiv1vkxc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ar3c4yTNJDcE0Lks' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgetsend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ForgetPassController@forgetSendMail',
        'controller' => 'App\\Http\\Controllers\\ForgetPassController@forgetSendMail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ar3c4yTNJDcE0Lks',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wKpCAAJxJpYYzEM5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'resetpass',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ForgetPassController@showResetPassword',
        'controller' => 'App\\Http\\Controllers\\ForgetPassController@showResetPassword',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wKpCAAJxJpYYzEM5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yR5B4UdEOUPkMWd5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ForgetPassController@ResetPassword',
        'controller' => 'App\\Http\\Controllers\\ForgetPassController@ResetPassword',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::yR5B4UdEOUPkMWd5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0wRLROYtqYwWVOBM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_patient_data_show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loginmiddle',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@admin_patient_show',
        'controller' => 'App\\Http\\Controllers\\adminController@admin_patient_show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::0wRLROYtqYwWVOBM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3ZG4FbOOVDBF3N1j' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_patient_data_show/delete_doc/{pat_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loginmiddle',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@admin_delete_patient',
        'controller' => 'App\\Http\\Controllers\\adminController@admin_delete_patient',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3ZG4FbOOVDBF3N1j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iPiACMfb2FbwRB9z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_add_patient',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loginmiddle',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@adminAddPatient',
        'controller' => 'App\\Http\\Controllers\\adminController@adminAddPatient',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iPiACMfb2FbwRB9z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mOVUvHNiobxfi8W0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin_add_patient',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loginmiddle',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@admin_registration',
        'controller' => 'App\\Http\\Controllers\\adminController@admin_registration',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mOVUvHNiobxfi8W0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
