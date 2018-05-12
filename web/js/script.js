jQuery(document).ready(function ($) {
    $('#polling').find('#announcedpuresults-0-party_abbreviation').on('change', function () {
    var url = "/election/web/index.php/polling-unit/party?ids="+$(this).val();
    $.ajax({
      url : url,
      type : 'post',
      success : function (response) {
        $('#polling').find('#announcedpuresults-1-party_abbreviation').html("<option>Please Wait...</option>");
        setTimeout(function () {
          $('#polling').find('#announcedpuresults-1-party_abbreviation').html(response);
        }, 700);
      }
    });
  });
  var value = '';
  $('#polling').find('#announcedpuresults-1-party_abbreviation').on('change', function () {
    value += $('#announcedpuresults-0-party_abbreviation').val();
    value += ','+$(this).val();
    var url = "/election/web/index.php/polling-unit/party?ids="+value;
    $.ajax({
      url : url,
      type : 'post',
      success : function (response) {
        $('#polling').find('#announcedpuresults-2-party_abbreviation').html("<option>Please Wait...</option>");
        setTimeout(function () {
          $('#polling').find('#announcedpuresults-2-party_abbreviation').html(response);
        }, 700);
      }
    });
  });
  $('#polling').find('#announcedpuresults-2-party_abbreviation').on('change', function () {
    value += $('#announcedpuresults-0-party_abbreviation').val();
    value += ','+$('#announcedpuresults-1-party_abbreviation').val();
    value += ','+$(this).val();
    var url = "/election/web/index.php/polling-unit/party?ids="+value;
    $.ajax({
      url : url,
      type : 'post',
      success : function (response) {
        $('#polling').find('#announcedpuresults-3-party_abbreviation').html("<option>Please Wait...</option>");
        setTimeout(function () {
          $('#polling').find('#announcedpuresults-3-party_abbreviation').html(response);
        }, 700);
      }
    });
  });
  $('#polling').find('#announcedpuresults-3-party_abbreviation').on('change', function () {
    value += $('#announcedpuresults-0-party_abbreviation').val();
    value += ','+$('#announcedpuresults-1-party_abbreviation').val();
    value += ','+$('#announcedpuresults-2-party_abbreviation').val();
    value += ','+$(this).val();
    var url = "/election/web/index.php/polling-unit/party?ids="+value;
    $.ajax({
      url : url,
      type : 'post',
      success : function (response) {
        $('#polling').find('#announcedpuresults-4-party_abbreviation').html("<option>Please Wait...</option>");
        setTimeout(function () {
          $('#polling').find('#announcedpuresults-4-party_abbreviation').html(response);
        }, 700);
      }
    });
  });
  $('#polling').find('#announcedpuresults-4-party_abbreviation').on('change', function () {
    value += $('#announcedpuresults-0-party_abbreviation').val();
    value += ','+$('#announcedpuresults-1-party_abbreviation').val();
    value += ','+$('#announcedpuresults-2-party_abbreviation').val();
    value += ','+$('#announcedpuresults-3-party_abbreviation').val();
    value += ','+$(this).val();
    var url = "/election/web/index.php/polling-unit/party?ids="+value;
    $.ajax({
      url : url,
      type : 'post',
      success : function (response) {
        $('#polling').find('#announcedpuresults-5-party_abbreviation').html("<option>Please Wait...</option>");
        setTimeout(function () {
          $('#polling').find('#announcedpuresults-5-party_abbreviation').html(response);
        }, 700);
      }
    });
  });
  $('#polling').find('#announcedpuresults-5-party_abbreviation').on('change', function () {
    value += $('#announcedpuresults-0-party_abbreviation').val();
    value += ','+$('#announcedpuresults-1-party_abbreviation').val();
    value += ','+$('#announcedpuresults-2-party_abbreviation').val();
    value += ','+$('#announcedpuresults-3-party_abbreviation').val();
    value += ','+$('#announcedpuresults-4-party_abbreviation').val();
    value += ','+$(this).val();
    var url = "/election/web/index.php/polling-unit/party?ids="+value;
    $.ajax({
      url : url,
      type : 'post',
      success : function (response) {
        $('#polling').find('#announcedpuresults-6-party_abbreviation').html("<option>Please Wait...</option>");
        setTimeout(function () {
          $('#polling').find('#announcedpuresults-6-party_abbreviation').html(response);
        }, 700);
      }
    });
  });
  $('#polling').find('#announcedpuresults-6-party_abbreviation').on('change', function () {
    value += $('#announcedpuresults-0-party_abbreviation').val();
    value += ','+$('#announcedpuresults-1-party_abbreviation').val();
    value += ','+$('#announcedpuresults-2-party_abbreviation').val();
    value += ','+$('#announcedpuresults-3-party_abbreviation').val();
    value += ','+$('#announcedpuresults-4-party_abbreviation').val();
    value += ','+$('#announcedpuresults-5-party_abbreviation').val();
    value += ','+$(this).val();
    var url = "/election/web/index.php/polling-unit/party?ids="+value;
    $.ajax({
      url : url,
      type : 'post',
      success : function (response) {
        $('#polling').find('#announcedpuresults-7-party_abbreviation').html("<option>Please Wait...</option>");
        setTimeout(function () {
          $('#polling').find('#announcedpuresults-7-party_abbreviation').html(response);
        }, 700);
      }
    });
  });
  $('#polling').find('#announcedpuresults-7-party_abbreviation').on('change', function () {
    value += $('#announcedpuresults-0-party_abbreviation').val();
    value += ','+$('#announcedpuresults-1-party_abbreviation').val();
    value += ','+$('#announcedpuresults-2-party_abbreviation').val();
    value += ','+$('#announcedpuresults-3-party_abbreviation').val();
    value += ','+$('#announcedpuresults-4-party_abbreviation').val();
    value += ','+$('#announcedpuresults-5-party_abbreviation').val();
    value += ','+$('#announcedpuresults-6-party_abbreviation').val();
    value += ','+$(this).val();
    var url = "/election/web/index.php/polling-unit/party?ids="+value;
    $.ajax({
      url : url,
      type : 'post',
      success : function (response) {
        $('#polling').find('#announcedpuresults-8-party_abbreviation').html("<option>Please Wait...</option>");
        setTimeout(function () {
          $('#polling').find('#announcedpuresults-8-party_abbreviation').html(response);
        }, 700);
      }
    });
  });
  $('#polling').find('#announcedpuresults-8-party_abbreviation').on('change', function () {
    value += $('#announcedpuresults-0-party_abbreviation').val();
    value += ','+$('#announcedpuresults-1-party_abbreviation').val();
    value += ','+$('#announcedpuresults-2-party_abbreviation').val();
    value += ','+$('#announcedpuresults-3-party_abbreviation').val();
    value += ','+$('#announcedpuresults-4-party_abbreviation').val();
    value += ','+$('#announcedpuresults-5-party_abbreviation').val();
    value += ','+$('#announcedpuresults-6-party_abbreviation').val();
    value += ','+$('#announcedpuresults-7-party_abbreviation').val();
    value += ','+$(this).val();
    var url = "/election/web/index.php/polling-unit/party?ids="+value;
    $.ajax({
      url : url,
      type : 'post',
      success : function (response) {
        $('#polling').find('#announcedpuresults-9-party_abbreviation').html("<option>Please Wait...</option>");
        setTimeout(function () {
          $('#polling').find('#announcedpuresults-9-party_abbreviation').html(response);
        }, 700);
      }
    });
  });
  $('#div').addClass('hide');
  $('#polling').find('#lga-state_id').on('change', function () {
    var url = "/election/web/index.php/polling-unit/lga?id="+$(this).val();
    $.ajax({
      url : url,
      type : 'post',
      success : function (response) {
        $('#polling').find('#pollingunit-lga_id').html("<option>Please Wait...</option>");
        setTimeout(function () {
          $('#polling').find('#pollingunit-lga_id').html(response);
        }, 700);
      }
    });
  });
  $('#polling').find('#pollingunit-lga_id').on('change', function () {
    var url = "/election/web/index.php/polling-unit/ward?id="+$(this).val();
    $.ajax({
      url : url,
      type : 'post',
      success : function (response) {
        $('#polling').find('#pollingunit-ward_id').html("<option>Please Wait...</option>");
        setTimeout(function () {
          $('#polling').find('#pollingunit-ward_id').html(response);
        }, 700);
      }
    });
  });

  $('#results').find('#lga-state_id').on('change', function () {
    var url = "/election/web/index.php/polling-unit/lga?id="+$(this).val();
    $.ajax({
      url : url,
      type : 'post',
      success : function (response) {
        $('#results').find('#pollingunit-lga_id').html("<option>Please Wait...</option>");
        setTimeout(function () {
          $('#results').find('#pollingunit-lga_id').html(response);
        }, 700);
      }
    });
  });
  $('#results').find('#pollingunit-lga_id').on('change', function () {
    var url = "/election/web/index.php/polling-unit/ward?id="+$(this).val();
    $.ajax({
      url : url,
      type : 'post',
      success : function (response) {
        $('#results').find('#pollingunit-ward_id').html("<option>Please Wait...</option>");
        setTimeout(function () {
          $('#results').find('#pollingunit-ward_id').html(response);
        }, 700);
      }
    });
  });
  $('#results').find('#pollingunit-ward_id').on('change', function () {
    var url = "/election/web/index.php/polling-unit/pu?id="+$(this).val();
    $.ajax({
      url : url,
      type : 'post',
      success : function (response) {
        $('#results').find('#pollingunit-polling_unit_id').html("<option>Please Wait...</option>");
        setTimeout(function () {
          $('#results').find('#pollingunit-polling_unit_id').html(response);
        }, 700);
      }
    });
  });
  $('#results').find('#pollingunit-polling_unit_id').on('change', function () {
    $('#div').addClass('hide');
    var url = "/election/web/index.php/polling-unit/view?id="+$(this).val();
    $.ajax({
      url : url,
      type : 'post',
      success : function (response) {
        $('#div').html(response);
        $('#div').removeClass('hide');
        $('#div').children('footer').addClass('hide');
        $('#div').children('nav').addClass('hide');
        //history.replaceState(null, null, url);
      }
    });
  });
  $('#lga_result').find('#lga-state_id').on('change', function () {
    var url = "/election/web/index.php/polling-unit/lga?id="+$(this).val();
    $.ajax({
      url : url,
      type : 'post',
      success : function (response) {
        $('#lga_result').find('#pollingunit-lga_id').html("<option>Please Wait...</option>");
        setTimeout(function () {
          $('#lga_result').find('#pollingunit-lga_id').html(response);
        }, 700);
      }
    });
  });
  $('#lga').find('#lga-state_id').on('change', function () {
    var url = "/election/web/index.php/polling-unit/lga?id="+$(this).val();
    $.ajax({
      url : url,
      type : 'post',
      success : function (response) {
        $('#lga').find('#lga-lga_id').html("<option>Please Wait...</option>");
        setTimeout(function () {
          $('#lga').find('#lga-lga_id').html(response);
        }, 700);
      }
    });
  });
  $('#lga').find('#lga-lga_id').on('change', function () {
    var url = "/election/web/index.php/announced-pu-results/res?id="+$(this).val();
    $.ajax({
      url : url,
      type : 'post',
      success : function (response) {
        $('.card-body').find('.table').html(response);
      }
    });
  });
});
