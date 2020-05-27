/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

var tfid, saldoTransfer, cpid;

$(document).ready(function () {
    $('button#deleteTf').click(function () {
        tfid = $(this).data('id');
        cpid = $(this).data('cpid')
        saldoTransfer = $(this).data('saldo');

        // console.log(tfid);
        // console.log(cpid);
    })

    $('button#nota').click(function () {
        var noteses;
        noteses = undefined;
        noteses = $(this).data('note');

        $('#detailNotes').empty();
        $('#detailNotes').append(noteses);
    })
})

function deleteTransfered(redirectUrl) {
    $(document).ready(function () {
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }),
            $.ajax({
                url: redirectUrl+'/api/v1/'+tfid+'/delete-transfer',
                type: 'post',
                data: {
                    campaignId: cpid,
                    saldo: saldoTransfer,
                },
                success: function (respons) {
                    console.log(respons)
                    window.location.href = redirectUrl+'/adwords/transfers';
                }
            })
    })

    // window.location.href = '{{ route('listProgress') }}';
}
