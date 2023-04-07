<div class="page__wrapper">
  <div class="page__center">
    <div class="page__row page__row_head">
      <div class="page__col">
        <div class="page__hello h5">Hi <?php echo $_SESSION['user_admin']['name'] ?>,</div>
        <div class="page__welcome h2">Welcome back<span class="desktop-hide">👋</span></div>
      </div>
      <div class="page__col">
        <div class="header"><button class="header__burger"></button>
          <div class="search">
            <div class="search__field"><input class="search__input" type="text" placeholder="Search" /><button class="search__toggle"><svg class="icon icon-search">
                  <use xlink:href="img/sprite.svg#icon-search"></use>
                </svg><svg class="icon icon-close">
                  <use xlink:href="img/sprite.svg#icon-close"></use>
                </svg></button></div>
            <div class="search__result">
              <div class="search__info caption-sm">Recent Searches</div>
              <div class="search__list"><a class="search__item" href="#">
                  <div class="search__preview bg-pink"><img class="search__pic" src="img/figure-1.png" alt="" />
                  </div>
                  <div class="search__text">Earning byitems<svg class="icon icon-arrow-right">
                      <use xlink:href="img/sprite.svg#icon-arrow-right"></use>
                    </svg></div>
                </a><a class="search__item" href="#">
                  <div class="search__preview bg-yellow"><img class="search__pic" src="img/figure-4.png" alt="" />
                  </div>
                  <div class="search__text">This monthStatements<svg class="icon icon-arrow-right">
                      <use xlink:href="img/sprite.svg#icon-arrow-right"></use>
                    </svg></div>
                </a><a class="search__item" href="#">
                  <div class="search__preview bg-blue-light"><img class="search__pic" src="img/figure-3.png" alt="" /></div>
                  <div class="search__text">How manysales I got…<svg class="icon icon-arrow-right">
                      <use xlink:href="img/sprite.svg#icon-arrow-right"></use>
                    </svg></div>
                </a></div><button class="search__btn btn btn_purple btn_wide">Advance Search</button>
            </div>
          </div><button class="header__search"><svg class="icon icon-search">
              <use xlink:href="img/sprite.svg#icon-search"></use>
            </svg></button>
          <div class="notifications"><button class="notifications__open"><svg class="icon icon-bell">
                <use xlink:href="img/sprite.svg#icon-bell"></use>
              </svg><span class="notifications__counter">2</span></button>
            <div class="notifications__wrap">
              <div class="notifications__info h6">Recent Notification</div>
              <div class="notifications__list"><a class="notifications__item" href="notifications.html">
                  <div class="notifications__ava"><img class="notifications__pic" src="img/ava-1.png" alt="" />
                    <div class="notifications__status bg-blue"><img class="notifications__pic" src="img/chat.html" alt="" /></div>
                  </div>
                  <div class="notifications__details">
                    <div class="notifications__line">
                      <div class="notifications__user caption">Sarah Saunders</div>
                      <div class="notifications__time caption">8h</div>
                    </div>
                    <div class="notifications__text caption-sm">Commented on <span class="notifications__project">Collab Design</span></div>
                  </div>
                </a><a class="notifications__item" href="notifications.html">
                  <div class="notifications__ava"><img class="notifications__pic" src="img/ava-1.png" alt="" />
                    <div class="notifications__status bg-green"><img class="notifications__pic" src="img/bag.svg" alt="" /></div>
                  </div>
                  <div class="notifications__details">
                    <div class="notifications__line">
                      <div class="notifications__user caption">Glenn Greer</div>
                      <div class="notifications__time caption">12h</div>
                    </div>
                    <div class="notifications__text caption-sm">Just pushaded <span class="notifications__project">Sapiens Illustration</span></div>
                  </div>
                </a><a class="notifications__item" href="notifications.html">
                  <div class="notifications__ava"><img class="notifications__pic" src="img/ava-1.png" alt="" />
                    <div class="notifications__status bg-purple"><img class="notifications__pic" src="img/message.svg" alt="" /></div>
                  </div>
                  <div class="notifications__details">
                    <div class="notifications__line">
                      <div class="notifications__user caption">Sarah Saunders</div>
                      <div class="notifications__time caption">14h</div>
                    </div>
                    <div class="notifications__text caption-sm">Sent you a message 📪 </div>
                  </div>
                </a><a class="notifications__item" href="notifications.html">
                  <div class="notifications__ava"><img class="notifications__pic" src="img/ava-1.png" alt="" />
                    <div class="notifications__status bg-red"><img class="notifications__pic" src="img/heart.svg" alt="" /></div>
                  </div>
                  <div class="notifications__details">
                    <div class="notifications__line">
                      <div class="notifications__user caption">Sarah Saunders</div>
                      <div class="notifications__time caption">21h</div>
                    </div>
                    <div class="notifications__text caption-sm">Liked <span class="notifications__project">Folio
                        Agency</span></div>
                  </div>
                </a><a class="notifications__item" href="notifications.html">
                  <div class="notifications__ava"><img class="notifications__pic" src="img/ava-1.png" alt="" />
                    <div class="notifications__status bg-blue"><img class="notifications__pic" src="img/chat.html" alt="" /></div>
                  </div>
                  <div class="notifications__details">
                    <div class="notifications__line">
                      <div class="notifications__user caption">Sarah Saunders</div>
                      <div class="notifications__time caption">8h</div>
                    </div>
                    <div class="notifications__text caption-sm">Commented on <span class="notifications__project">Collab Design</span></div>
                  </div>
                </a><a class="notifications__item" href="notifications.html">
                  <div class="notifications__ava"><img class="notifications__pic" src="img/ava-1.png" alt="" />
                    <div class="notifications__status bg-green"><img class="notifications__pic" src="img/bag.svg" alt="" /></div>
                  </div>
                  <div class="notifications__details">
                    <div class="notifications__line">
                      <div class="notifications__user caption">Glenn Greer</div>
                      <div class="notifications__time caption">12h</div>
                    </div>
                    <div class="notifications__text caption-sm">Just pushaded <span class="notifications__project">Sapiens Illustration</span></div>
                  </div>
                </a></div>
              <div class="notifications__btns"><a class="notifications__btn btn btn_black" href="notifications.html">See all incoming activity</a></div>
            </div>
          </div><a class="header__user" href="#"><img class="header__pic" src="img/ava.png" alt="" /></a>
        </div>
      </div>
    </div>
    <div class="page__content">
      <div class="banner">
        <!--<div class="banner__container">
              <div class="banner__preview"><img class="banner__pic" src="img/banner-pic.png" alt=""></div>
              <div class="banner__wrap">
                <div class="banner__title h3">Your Products</div>
                <div class="banner__text">Create Your Product Dashboard in Minutes</div><button
                  class="banner__btn btn btn_white">Check all settings</button>
              </div>
            </div> -->
      </div>
      <section class="list_products">

        <div class="wrapper-table" style="margin-top: 0px;">
          <div class="cot4">
            <div class="dropdown">
              <button class="dropbtn adc color_ct_0" value="0">Trạng thái</button>
              <div class="list-drop">
                <!-- <div class="item-drop color_ct_0" value=0>Trạng thái<div> -->
                <div class="item-drop color_ct_1" value=1>Chưa xác nhận</div>
                <div class="item-drop color_ct_2" value=2>Đã xác nhận</div>
                <div class="item-drop color_ct_3" value=3>Đang giao hàng</div>
                <div class="item-drop color_ct_4" value=4>Đã nhận</div>
                <div class="item-drop color_ct_5" value=5>Bị trả hàng</div>
                <div class="item-drop color_ct_6" value=6>Huỷ đơn</div>
              </div>
            </div>

          </div>

          <table class="table-inform">
            <thead style="text-align: center;">
              <th width="50px">Mã</th>
              <th width="150px">Tên người nhận</th>
              <th width="150px">Số điện thoại</th>
              <th width="150px">Địa chỉ</th>
              <th width="150px">Ngày đặt</th>
              <th width="100px">Số lượng</th>
              <th width="200px">Đơn giá</th>
              <th width="200px">Trạng thái</th>
              <th width="70px">Công cụ</th>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>

      </section>
    </div>
  </div>
</div>
</div>

<script>
  function showListHoaDon(sortTT) {
    if (!sortTT) var sortTT = 0
    var form_data = new FormData();
    form_data.append('sort', sortTT)
    $.ajax({
      url: "../api/main.php?act=getListHoaDon", //Server api to receive the file
      type: "POST",
      cache: false,
      contentType: false,
      processData: false,
      data: form_data,
      success: function(suc) {
        var listBill = JSON.parse(suc)
        var table = document.querySelector('.table-inform').querySelector('tbody')

        var listBillHTML = ``
        listBill.forEach((i) => {
          var index = i['dia_chi'].lastIndexOf(",") + 2
          var vin = i['dia_chi'].slice(index)
          vin = vin.replace('Tỉnh', "").trim()
          vin = vin.replace('Thành phố', "").trim()
          listBillHTML += `
                        <tr class="trang_thai_${i['trang_thai']}" madon=${i['ma_don_hang']} style="margin-bottom: 8px">
                            <td width="50px">${i['ma_don_hang']}</td>
                            <td width="150px">${i['ten_nguoi_nhan']}</td>
                            <td width="150px">${i['so_dien_thoai']}</td>
                            <td width="150px" class="form_address">
                                ${vin}
                                <span>${i['dia_chi']}</span>
                            </td>
                            <td width="150px">${i['ngay_dat_hang']}</td>
                            <td width="100px">${i['so_luong']}</td>
                            <td width="200px">${i['don_gia']}$</td>
                            <td width="200px" class="trang_thai" >
                                <div class="btn_ct" value=${i['trang_thai']} onclick="showList(this)">
                                    ${i['ten_trang_thai']}
                                </div>
                                <ul></ul>
                                
                            </td>
                            <td class="flex">
                                <a class="a" href="?act=bill_detail&id=${i['ma_don_hang']}" style="margin-right:10px">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75a4.5 4.5 0 01-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 11-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 016.336-4.486l-3.276 3.276a3.004 3.004 0 002.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.867 19.125h.008v.008h-.008v-.008z" />
                                    </svg>
                                </a>
                                <a class="a" href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>

                                </a>
                            </td>
                        </tr>
                    `
        })

        table.innerHTML = listBillHTML
      }
    });
  }
  showListHoaDon()

  // document.querySelector('a')
  function showList(i) {
    var list = i.parentElement.querySelector('ul')
    if (list.innerHTML != "") {
      list.innerHTML = ``
      return
    }
    var trangThai = Number(i.getAttribute('value'))
    if (trangThai >= 3) return
    var ele = {
      1: `<li class="color_ct_1" value=1>Chưa xác nhận</li>`,
      2: `<li class="color_ct_2" value=2>Đã xác nhận</li>`,
      3: `<li class="color_ct_3" value=3>Đang giao hàng</li>`,
    }

    var listHTML = ele[1] + ele[2] + ele[3];
    list.innerHTML = listHTML
    list.onclick = (e) => {
      var ele = e.target;
      var value = Number(ele.getAttribute('value'))
      if (trangThai == value) {
        list.innerHTML = ``
        return
      }
      var tr = ele.parentElement.parentElement.parentElement
      var ma_don = Number(tr.getAttribute('madon'))

      var form_data = new FormData();
      form_data.append('ma_don_hang', ma_don);
      form_data.append('trang_thai', value);
      $.ajax({
        url: "../api/main.php?act=updateTrangThai", //Server api to receive the file
        type: "POST",
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        success: function(suc) {
          toast({
            title: "Thành công!",
            message: "Thay đổi trạng thái thành công",
            type: "success",
            duration: 5000
          });

          var btn = ele.parentElement.parentElement.querySelector('.btn_ct')
          var text = ele.innerHTML
          btn.innerHTML = text
          btn.setAttribute('value', value)
          tr.classList.replace(tr.classList[0], 'trang_thai_' + value)
          list.innerHTML = ``
        }
      });


    }
  }
  // $('.list-drop').hide()
  $('.dropbtn').click(() => {
    $('.list-drop').toggle('hien')
  })

  $('.list-drop').click((e) => {
    var ele = e.target
    var value = Number(ele.getAttribute('value'))
    var text = ele.innerHTML
    
    var classList = $('.dropbtn').attr('class').split(/\s+/);
    var classBtn = classList[classList.length-1];
    
    $('.dropbtn').attr('value', value)
    $('.dropbtn').html(text)
    $('.dropbtn').removeClass(classBtn)
    $('.dropbtn').addClass('color_ct_' + value)
    $('.list-drop').toggle('hien')
    showListHoaDon(value)
  })
</script>