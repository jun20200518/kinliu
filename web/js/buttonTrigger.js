//sidebars
(function () {
  // click on blur mask

  if (
    document.querySelector('.blurMask') === null ||
    document.querySelector('.marketSelectMenu') === null ||
    document.querySelector('.userCenterMenu') === null
  )
    return;

  document.querySelector('.blurMask').addEventListener('click', e => {
    document.querySelector('.marketSelectMenu').classList.remove('show');

    document.querySelector('.userCenterMenu').classList.remove('show');

    document.querySelector('.blurMask').classList.remove('show');
  });

  //toggle marketSelectMenu
  document.querySelectorAll('.marketSelectMenuButton').forEach(dom =>
    dom.addEventListener('click', e => {
      document.querySelector('.marketSelectMenu').classList.toggle('show');
      document.querySelector('.blurMask').classList.toggle('show');
    })
  );

  //toggle userCenterMenu
  document.querySelectorAll('.userCenterMenuButton').forEach(dom =>
    dom.addEventListener('click', e => {
      document.querySelector('.userCenterMenu').classList.toggle('show');
      document.querySelector('.blurMask').classList.toggle('show');
    })
  );
})();

//toggle finalConfirmModel
// (function () {
//   if (document.querySelector('.tradingModel__confirm') === null) return;

//   document.querySelector('.tradingModel__confirm > a.btn').addEventListener(
//     'click',
//     e => {
//       document.querySelector('.finalConfirmModel').classList.toggle('show');
//       document
//         .querySelector('.finalConfirmModel__wrapper')
//         .classList.add('bounceInUp');
//     },
//     false
//   );

//   document.querySelector('.finalConfirmModel').addEventListener('click', e => {
//     if (
//       e.target.classList.contains('finalConfirmModel') ||
//       e.target.classList.contains('finalConfirmModel__confirmButtons_cancel')
//     ) {
//       document.querySelector('.finalConfirmModel').classList.remove('show');
//       document
//         .querySelector('.finalConfirmModel__wrapper')
//         .classList.remove('bounceInUp');
//     }
//   });
// })();

(function () {
  // click on blurmask

  if (
    document.querySelector('.buyblurMask') === null ||
    document.querySelector('.marketSelectMenu') === null ||
    document.querySelector('.userCenterMenu') === null
  )
    return;
  document.querySelector('.buyblurMask').addEventListener('click', e => {
    document.querySelector('.tradingModel').classList.remove('show');
    document.querySelector('.transitionButtons').style.bottom = '';
    document.querySelector('.buyblurMask').classList.remove('show');
    document.querySelector('.transitionButtons_up').classList.remove('dilute')
    document.querySelector('.transitionButtons_down').classList.remove('dilute')
  });
})();

//toggle trading model
(function () {
  if (document.querySelector('.transitionButtons') === null) return;

  const buttons = document.querySelector('.transitionButtons');
  const confirmButton = document.querySelector('.tradingModel__confirm .btn');

  document
    .querySelector('.transitionButtons_up')
    .addEventListener('click', e => {
      let tradingModel = document.querySelector('.tradingModel');
      let shiftY = tradingModel.offsetHeight;

      if (tradingModel.matches('.show.buy')) {
        document.querySelector('.buyblurMask').classList.remove('show');
        tradingModel.classList.remove('show');
        document.querySelector('.transitionButtons').style.bottom = '';
        document.querySelector('.transitionButtons_down').classList.remove('dilute')
      } else {
        document.querySelector('.buyblurMask').classList.add('show');
        tradingModel.classList.add('show', 'buy');
        document.querySelector('.transitionButtons').style.bottom =
          shiftY + 'px';
        document.querySelector('.transitionButtons_down').classList.add('dilute')
      }

      if (tradingModel.matches('.show.sell')) {
        tradingModel.classList.remove('sell');
        tradingModel.classList.add('buy');
        confirmButton.textContent = '买跌';
        document.querySelector('.transitionButtons_up').classList.remove('dilute')
      }
    });

  document
    .querySelector('.transitionButtons_down')
    .addEventListener('click', e => {
      let tradingModel = document.querySelector('.tradingModel');
      let shiftY = tradingModel.offsetHeight;

      if (tradingModel.matches('.show.sell')) {
        document.querySelector('.buyblurMask').classList.remove('show');
        tradingModel.classList.remove('show');
        buttons.style.bottom = '';
        document.querySelector('.transitionButtons_up').classList.remove('dilute')
      } else {
        document.querySelector('.buyblurMask').classList.add('show');
        tradingModel.classList.add('show', 'sell');
        confirmButton.textContent = '买涨';
        buttons.style.bottom = shiftY + 'px';
        document.querySelector('.transitionButtons_up ').classList.add('dilute')
      }

      if (tradingModel.matches('.show.buy')) {
        tradingModel.classList.remove('buy');
        tradingModel.classList.add('sell');
        confirmButton.textContent = '买涨';
        document.querySelector('.transitionButtons_down').classList.remove('dilute')
      }
    });
})();

//tradePanel__viewChangeButtons
(function () {
  if (!document.querySelector('.tradePanel__viewChangeButtons')) return;
  document
    .querySelector('.tradePanel__viewChangeButtons')
    .addEventListener('click', e => {
      [...e.currentTarget.children].forEach(dom =>
        dom.classList.remove('active')
      );
      e.target.classList.add('active');
    });
})();

// //marketSelectMenu__buttons
// (function () {
//   if (!document.querySelector('.marketSelectMenu__buttons')) return
//   document.querySelector('.marketSelectMenu__buttons').addEventListener('click', (e) => {
//     [...e.currentTarget.children].forEach(dom => dom.classList.remove('active'))
//     e.target.closest('A').classList.add('active')
//   })
// })();

//marketSelectMenu__nextPageButton
(function () {
  if (!document.querySelector('.marketSelectMenu__nextPageButton')) return;
  document
    .querySelector('.marketSelectMenu__nextPageButton')
    .addEventListener('click', e => {
      const table = document.querySelector('.marketSelectMenu .wrapper');
      table.scrollTo({
        behavior: 'smooth',
        top: (table.scrollTop += 50)
      });
    });
  document
    .querySelector('.marketSelectMenu__nextPageButton')
    .addEventListener('mousedown', e => {
      const table = document.querySelector('.marketSelectMenu .wrapper');

      function scrollDownHandler() {
        table.scrollTo({
          behavior: 'smooth',
          top: (table.scrollTop += 50)
        });
        scrollTimer = setTimeout(scrollDownHandler, 200);
      }
      scrollDownHandler();
    });
  document
    .querySelector('.marketSelectMenu__nextPageButton')
    .addEventListener('mouseup', e => {
      clearTimeout(scrollTimer);
    });
  document
    .querySelector('.marketSelectMenu__nextPageButton')
    .addEventListener('touchstart', e => {
      if (e.cancelable) {
        e.preventDefault();
      }
      const table = document.querySelector('.marketSelectMenu .wrapper');

      function scrollDownHandler() {
        table.scrollTo({
          behavior: 'smooth',
          top: (table.scrollTop += 50)
        });
        scrollTimer = setTimeout(scrollDownHandler, 200);
      }
      scrollDownHandler();
    });
  document
    .querySelector('.marketSelectMenu__nextPageButton')
    .addEventListener('touchend', e => {
      clearTimeout(scrollTimer);
    });
})();

//trading models
(function () {
  if (!document.querySelectorAll('.tradingModel__option')) return;
  document.querySelectorAll('.tradingModel__option .btn').forEach(button =>
    button.addEventListener('click', e => {
      document
        .querySelectorAll('.tradingModel__option .btn')
        .forEach(dom => dom.classList.remove('active'));
      e.currentTarget.classList.add('active');
    })
  );
})();

//tradingModel__moneyOption
(function () {
  if (!document.querySelectorAll('.tradingModel__option')) return;

  let inputs = document.querySelectorAll(
    '.tradingModel__moneyOption .btn, .tradingModel__moneyOption input[type="number"]'
  );
  inputs.forEach(dom =>
    dom.addEventListener('click', e => {
      inputs.forEach(dom => dom.classList.remove('active'));
      e.currentTarget.classList.add('active');
    })
  );
})();

//final confirm model checkMark
(function () {
  if (
    !document.querySelector('.checkedBtn') ||
    !document.querySelector('.checkMark')
  )
    return;

  const circle = document.querySelector('.checkedBtn');
  const mark = document.querySelector('.checkMark');

  circle.addEventListener('click', () => {
    if (mark.classList.contains('checked')) {
      unchecked();
    } else checked();
  });
  mark.addEventListener('click', unchecked);

  function checked() {
    mark.classList.add('checked');
    mark.classList.remove('unchecked');
  }

  function unchecked() {
    mark.classList.add('unchecked');
    mark.classList.remove('checked');
  }
})();

// recharge rmbbtn
(function () {
  if (!document.querySelector('.rmbbtn')) return;
  let inputs = document.querySelectorAll('.rmbbtn .btn');
  inputs.forEach(dom =>
    dom.addEventListener('click', e => {
      //所有的btn移除active Class
      inputs.forEach(dom => dom.classList.remove('active'));
      //点击的按钮加 active Class
      e.currentTarget.classList.add('active');
    })
  );
})();

// marketmodel

(function () {
  if (document.querySelector('.priceSummary') === null) return;

  document.querySelector('.priceSummary > a.btn').addEventListener(
    'click',
    e => {
      document.querySelector('.marketModel').classList.toggle('show');
      document.querySelector('.market_wrapper').classList.remove('bounceOutUp');
      document.querySelector('.market_wrapper').classList.add('bounceInDown');
    },
    false
  );

  document.querySelector('.marketModel').addEventListener('click', e => {
    if (
      e.target.classList.contains('marketModel') ||
      e.target.classList.contains('market_confirmButtons_close')
    ) {
      document
        .querySelector('.market_wrapper')
        .classList.remove('bounceInDown');
      document.querySelector('.market_wrapper').classList.add('bounceOutUp');
      document.querySelector('.marketModel').classList.remove('show');
    }
  });
})();

// marketbuttons
(function () {
  if (!document.querySelector('.market_buttons')) return;
  document.querySelector('.market_buttons').addEventListener('click', e => {
    [...e.currentTarget.children].forEach(dom =>
      dom.classList.remove('active')
    );
    e.target.closest('A').classList.add('active');
  });
})();

// marketSelectMenu transaction_btn
$(function () {
  $('#transaction_btn section[id!="currenttransaction"]').hide();
  $('.marketSelectMenu__buttons a').click(function () {
    $('#transaction_btn section').hide();
    $($(this).attr('href')).show();
    $('.cur').removeClass('cur');
    $(this).addClass('cur');
    return false;
  });
});

// transactionrecord
$(function () {
  $('.expand_content').css('height', '0px');

  $('#transactionrecord .tbody').on('click', '.expand_btn a', function (e) {
    e.preventDefault()
    document.querySelectorAll('.tr .td img').forEach(dom => dom.style.transform = '')
    if (!$(this.closest('.expand_btn a')).hasClass('currentBtn')) {
      $('.currenter').animate({
          height: '0px',
          padding: '0px'
        },
        200
      );
      $(this.closest('.expand').querySelector('.expand_content')).animate({
          height: '70px',
          width: '90%',
          'margin-left': '5%',
          padding: '8px '
        },
        200
      );

      $('.expand_content').removeClass('currenter');
      this.closest('.expand').querySelector('.expand_content').classList.add('currenter');
      this.closest('.expand_btn').querySelector('img').style.transform = 'rotate(180deg)';
      $('.expand_btn a').removeClass();
      $(this.closest('.expand_btn a')).addClass('currentBtn');
    } else {
      $('.currenter').animate({
          height: '0px',
          padding: '0px'
        },
        200
      );
      document.querySelectorAll('.tr .td img').forEach(dom => {
        dom.style.transform = ''
      })
      $('.expand_btn a').removeClass();
      $('.expand_content').removeClass('currenter');
    }

    return false;
  });
});


// (function () {
//   if (document.querySelector('.bank_addaccount') === null) return;

//   document.querySelector('.bank_addaccount > a.btn').addEventListener(
//     'click',
//     e => {
//       document.querySelector('.modify_account').classList.toggle('show');
//       document.querySelector('.modify_account_wrapper').classList.remove('bounceOutUp');
//       document.querySelector('.modify_account_wrapper').classList.add('bounceInDown');
//     },
//     false
//   );

//   document.querySelector('.modify_account').addEventListener('click', e => {
//     if (
//       e.target.classList.contains('modify_account') ||
//       e.target.classList.contains('modify_account_Buttons_cancel')
//     ) {
//       document.querySelector('.modify_account').classList.remove('show');
//       document
//         .querySelector('.modify_account_wrapper')
//         .classList.remove('bounceInUp');

//     }
//   });
// })();


(function () {
  if (!document.querySelector('.period_buttons')) return
  document.querySelector('.period_buttons').addEventListener('click', e => {
    document.querySelectorAll('.period_buttons .btn').forEach(dom => dom.classList.remove('active'))
    e.target.classList.add('active')
  });
}());

$(".personalInfoForm__content a.btn").click(function () {
  $(".change_password input").removeAttr('disabled');
  $(".personalInfoForm__content a.btn").text("确认");
  $(this).css({
    "color": "#dadced",
    "background-color": "#a287f4",
  });
  return false;
});