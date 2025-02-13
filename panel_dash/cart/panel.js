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
  series: [{
  name: 'NPS Cartera',
  data: [31, 40, 28]
}, {
  name: 'NPS Rolling',
  data: [11, 32, 45]
}],
  chart: {
  height: 350,
  type: 'area'
},
dataLabels: {
  enabled: false
},
stroke: {
  curve: 'smooth'
},
xaxis: {
  type: 'date',
  categories: ["11/02/2025", "18/02/2025", "25/02/2025"]
},
tooltip: {
  x: {
    format: 'dd/MM/yy '
  },
},
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();

// APEXCHART 3 //
var options = {
	series: [
	{
	  name: 'Enero',
	  data: [
		{
		  x: 'Enero',
		  y: 503,
		},
		{
		  x: 'Febrero',
		  y: 580,
		},
		{
		  x: 'Marzo',
		  y: 135,
		},
	  ],
	},
	{
	  name: 'Febrero',
	  data: [
		{
		  x: 'Category 1',
		  y: 733,
		},
		{
		  x: 'Category 2',
		  y: 385,
		},
		{
		  x: 'Category 3',
		  y: 715,
		},
	  ],
	},
	{
	  name: 'Marzo',
	  data: [
		{
		  x: 'Category 1',
		  y: 255,
		},
		{
		  x: 'Category 2',
		  y: 211,
		},
		{
		  x: 'Category 3',
		  y: 441,
		},
	  ],
	},
	{
	  name: 'Abril',
	  data: [
		{
		  x: 'Category 1',
		  y: 428,
		},
		{
		  x: 'Category 2',
		  y: 749,
		},
		{
		  x: 'Category 3',
		  y: 559,
		},
	  ],
	},
  ],
	chart: {
	height: 350,
	width: 600,
	type: 'line',
  },
  plotOptions: {
	line: {
	  isSlopeChart: true,
	},
  },
  tooltip: {
	followCursor: true,
	intersect: false,
	shared: true,
  },
  dataLabels: {
	background: {
	  enabled: true,
	},
	formatter(val, opts) {
	  const seriesName = opts.w.config.series[opts.seriesIndex].name
	  return val !== null ? seriesName : ''
	},
  },
  yaxis: {
	show: true,
	labels: {
	  show: true,
	},
  },
  xaxis: {
	position: 'bottom',
  },
  legend: {
	show: true,
	position: 'top',
	horizontalAlign: 'left',
  },
  stroke: {
	width: [2, 3, 4, 2],
	dashArray: [0, 0, 5, 2],
	curve: 'smooth',
  }
  };

  var chart = new ApexCharts(document.querySelector("#chart2"), options);
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