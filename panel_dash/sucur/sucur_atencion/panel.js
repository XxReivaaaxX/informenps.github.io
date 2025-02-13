// SIDEBAR DROPDOWN
const allDropdown = document.querySelectorAll('#sidebar .side-dropdown');
const sidebar = document.getElementById('sidebar');

allDropdown.forEach(item=> {
	const a = item.parentElement.querySelector('a:first-child');
	a.addEventListener('click', function (e) {
		e.preventDefault();

		if(!this.classList.contains('active')) {
			allDropdown.forEach(i=> {
				const aLink = i.parentElement.querySelector('a:first-child');

				aLink.classList.remove('active');
				i.classList.remove('show');
			})
		}

		this.classList.toggle('active');
		item.classList.toggle('show');
	})
})





// SIDEBAR COLLAPSE
const toggleSidebar = document.querySelector('nav .toggle-sidebar');
const allSideDivider = document.querySelectorAll('#sidebar .divider');

if(sidebar.classList.contains('hide')) {
	allSideDivider.forEach(item=> {
		item.textContent = '-'
	})
	allDropdown.forEach(item=> {
		const a = item.parentElement.querySelector('a:first-child');
		a.classList.remove('active');
		item.classList.remove('show');
	})
} else {
	allSideDivider.forEach(item=> {
		item.textContent = item.dataset.text;
	})
}

toggleSidebar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');

	if(sidebar.classList.contains('hide')) {
		allSideDivider.forEach(item=> {
			item.textContent = '-'
		})

		allDropdown.forEach(item=> {
			const a = item.parentElement.querySelector('a:first-child');
			a.classList.remove('active');
			item.classList.remove('show');
		})
	} else {
		allSideDivider.forEach(item=> {
			item.textContent = item.dataset.text;
		})
	}
})




sidebar.addEventListener('mouseleave', function () {
	if(this.classList.contains('hide')) {
		allDropdown.forEach(item=> {
			const a = item.parentElement.querySelector('a:first-child');
			a.classList.remove('active');
			item.classList.remove('show');
		})
		allSideDivider.forEach(item=> {
			item.textContent = '-'
		})
	}
})



sidebar.addEventListener('mouseenter', function () {
	if(this.classList.contains('hide')) {
		allDropdown.forEach(item=> {
			const a = item.parentElement.querySelector('a:first-child');
			a.classList.remove('active');
			item.classList.remove('show');
		})
		allSideDivider.forEach(item=> {
			item.textContent = item.dataset.text;
		})
	}
})




// PROFILE DROPDOWN
const profile = document.querySelector('nav .profile');
const imgProfile = profile.querySelector('img');
const dropdownProfile = profile.querySelector('.profile-link');

imgProfile.addEventListener('click', function () {
	dropdownProfile.classList.toggle('show');
})




// MENU
const allMenu = document.querySelectorAll('main .content-data .head .menu');

allMenu.forEach(item=> {
	const icon = item.querySelector('.icon');
	const menuLink = item.querySelector('.menu-link');

	icon.addEventListener('click', function () {
		menuLink.classList.toggle('show');
	})
})



window.addEventListener('click', function (e) {
	if(e.target !== imgProfile) {
		if(e.target !== dropdownProfile) {
			if(dropdownProfile.classList.contains('show')) {
				dropdownProfile.classList.remove('show');
			}
		}
	}

	allMenu.forEach(item=> {
		const icon = item.querySelector('.icon');
		const menuLink = item.querySelector('.menu-link');

		if(e.target !== icon) {
			if(e.target !== menuLink) {
				if (menuLink.classList.contains('show')) {
					menuLink.classList.remove('show')
				}
			}
		}
	})
})





// PROGRESSBAR
const allProgress = document.querySelectorAll('main .card .progress');

allProgress.forEach(item=> {
	item.style.setProperty('--value', item.dataset.value)
})






// APEXCHART
var options = {
	series: [
	{
	  name: "",
	  data: [200, 330, 548, 740, 880, 990, 1100, 1380],
	},
  ],
	chart: {
	type: 'bar',
	height: 350,
	dropShadow: {
	  enabled: false,
	},
  },
  plotOptions: {
	bar: {
	  borderRadius: 0,
	  horizontal: true,
	  distributed: true,
	  barHeight: '60%',
	  isFunnel: true,
	},
  },
  colors: [
	'#008f39',
	'#BDECB6',
	'#008f39',
	'#BDECB6',
	'#008f39',
	'#BDECB6',
	'#008f39',
	'#BDECB6',
  ],
  dataLabels: {
	enabled: true,
	formatter: function (val, opt) {
	  return opt.w.globals.labels[opt.dataPointIndex] 
	},
	dropShadow: {
	  enabled: true,
	},
  },
  title: {
	text: 'TOP 8',
	align: 'middle',
  },
  xaxis: {
	categories: ['1', '2', '3', '4', '5', '6', '7', '8'],
  },
  legend: {
	show: false,
  },
  };

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();

//APEXCHART 2 //
var options = {
	series: [{
	name: 'NPS',
	data: [{
	  x: '2024',
	  y: 79.2,
	}, {
	  x: '2025',
	  y: 81.10,
	  fillColor: '#EB8C87',
	  strokeColor: '#C23829'
	}],
  }],
	chart: {
	height: 350,
	type: 'bar',
  },
  plotOptions: {
	bar: {
	  horizontal: false,
	  columnWidth: '60%'
	},
  },
  stroke: {
	width: 0,
  },
  dataLabels: {
	enabled: true
  },
  yaxis: {
	labels: {
	  formatter: function(val) {
		return val + "%"
	  }
	}
  },
  fill: {
	opacity: 1,
  },
  xaxis: {
	categories: ['2024','2025'],
  },
  legend: {
	show: true,
  },
  };

  var chart = new ApexCharts(document.querySelector("#chart2"), options);
  chart.render();

// APEXCHART 3 //
var options = {
	series: [{
	name: 'Enero',
	data: [63.80, 55]
  }, {
	name: 'Febrero',
	data: [63.30, 23]
  }, {
	name: 'Marzo',
	data: [63.53, 0]
  }, {
	name: 'Abril',
	data: [65.03, 0]
  }, {
	name: 'Mayo',
	data: [64.36, 0]
  }, {
	name: 'Junio',
	data: [61.94, 0]
  }, {
	name: 'Julio',
	data: [58.84, 0]
  }, {
	name: 'Agosto',
	data: [59.09, 0]
  }, {
	name: 'Septiembre',
	data: [62.46, 0]
  }, {
	name: 'Octubre',
	data: [59.62, 0]
  }, {
	name: 'Noviembre',
	data: [60.75, 0]
  }, {
	name: 'Diciembre',
	data: [60.73, 0]
  }],
	chart: {
	type: 'bar',
	height: 350,
	stacked: true,
	stackType: 'normal',
	dropShadow: {
		enabled: true,
	  },
  },
  responsive: [{
	breakpoint: 480,
	options: {
	  legend: {
		position: 'top',
		offsetX: -10,
		offsetY: 0
	  }
	}
  }],
  xaxis: {
	categories: ['2024', '2025'],
  },
  yaxis: {
	labels: {
	  formatter: function(val) {
		return val + "%"
	  }
	}
  },
  fill: {
	opacity: 1
  },
  legend: {
	position: 'right',
	offsetX: 0,
	offsetY: 50
  },
  };

  var chart = new ApexCharts(document.querySelector("#chart3"), options);
  chart.render();

  
// CHATBOT //
const btnSend = document.getElementById("btn");
const chat = document.getElementById("chat");

const getMessage = (msg) => {
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      const response = xhr.responseText;
      const chatBody = document.querySelector(".scroller");
      const divCpu = document.createElement("div");
      divCpu.className = "cx visible";
      divCpu.innerHTML = response;
      const divUser = document.createElement("div");
      divUser.className = "me visible";
      divUser.textContent = msg;
      chatBody.append(divUser);
      setTimeout(() => {
        chatBody.append(divCpu);
      }, 600);
      //   console.log(divCpu);
    }
  };
  xhr.open("GET", "../../botcx/chat.php?msg=" + msg, true);
  xhr.send();
};

btnSend.addEventListener("click", (e) => {
  e.preventDefault();
  if (chat.value == "") {
  } else {
    getMessage(chat.value);
    chat.value = "";
  }
});