<template>
	<div>
		<div id="st-container" class="st-container st-effect" v-on:click="closeSidebar">
			<!-- 	
				example menus  st-effect st-menu-open
				these menus will be on top of the push wrapper
			-->

			<nav class="st-menu st-effect" id="menu">

				<div class="sidebar-heading">
					<a href="/">
						<h2 class="icon icon-lab">
							{{"Positive Lunch Box"}}
						</h2>
					</a>
					<h3 class="icon icon-lab auth--name">{{userInformation.name}}</h3>
					<h3 class="icon icon-lab auth--email">{{userInformation.email}}</h3>

				</div>
				<ul>
					<li>
						<router-link class="link" :to="{ name: 'home' }">Home1</router-link>
					</li>
					<li>
						<router-link class="link" :to="{ name: 'hello' }">Hello World</router-link>
					</li>

					<li>
						<router-link class="link" :to="{ name: 'hello' }">Hello World</router-link>
					</li>
					<li>
						<a href="/main/hello">Hello World1</a>
					</li>
					<li>
						<router-link class="link" :to="{ name: 'home' }">Home1</router-link>
					</li>
					<li>
						<router-link class="link" :to="{ name: 'hello' }">Hello World</router-link>
					</li>

					<li>
						<router-link class="link" :to="{ name: 'hello' }">Hello World</router-link>
					</li>
					<li>
						<a href="/main/hello">Hello World1</a>
					</li>
					<li>
						<router-link class="link" :to="{ name: 'home' }">Home3</router-link>
					</li>
					<li>
						<router-link class="link" :to="{ name: 'hello' }">Hello Wo3rld</router-link>
					</li>

					<li>
						<router-link class="link" :to="{ name: 'hello' }">Hello W333orld</router-link>
					</li>
					<li>
						<router-link class="link" :to="{ name: 'home' }">Home1</router-link>
					</li>
					<li>
						<router-link class="link" :to="{ name: 'hello' }">Hello World</router-link>
					</li>

					<li>
						<router-link class="link" :to="{ name: 'hello' }">Hello World</router-link>
					</li>
					<li>
						<a href="/main/hello">Hello World1</a>
					</li>
					<li>
						<router-link class="link" :to="{ name: 'home' }">Home1</router-link>
					</li>
					<li>
						<router-link class="link" :to="{ name: 'hello' }">Hello World</router-link>
					</li>

					<li>
						<router-link class="link" :to="{ name: 'hello' }">Hello World</router-link>
					</li>
					<li>
						<a href="/main/hello">Hello World1</a>
					</li>
					<li>
						<router-link class="link" :to="{ name: 'home' }">Home3</router-link>
					</li>
					<li>
						<router-link class="link" :to="{ name: 'hello' }">Hello Wo3rld</router-link>
					</li>

					<li>
						<router-link class="link" :to="{ name: 'hello' }">Hello W333orld</router-link>
					</li>
					<li>
						<a href="/main/hello">Hello Wor333ld1</a>
					</li>

				</ul>
			</nav>

			<!-- content push wrapper -->
			<div class="st-pusher" style="height: 100vh">
				<!-- 	
					example menus 
					these menus will be under the push wrapper
				-->

				<div class="st-content">
					<!-- this is the wrapper for the content -->
					<div class="st-content-inner">
						<router-view></router-view>
						<img class="sidebar-btn" v-on:click="openSidebar" src="../../img/logo.png" />
						<button v-on:click="openSidebar">Try it</button>
					</div><!-- /st-content-inner -->
				</div><!-- /st-content -->
			</div><!-- /st-pusher -->
		</div>
	</div>
</template>
<script>
export default {
  props: ["Food"],
  data: function() {
    return {
      changes: false,
      userInformation: {}
    };
  },
  created: function() {
    // console.log("this", this);
    // console.log("this", JSON.parse(this.Food));
    this.userInformation = JSON.parse(this.Food);
    console.log(this.userInformation);
  },
  methods: {
    closeSidebar: function(e) {
      if (this.changes != false) {
        document
          .getElementById("st-container")
          .classList.remove("st-menu-open");
        this.changes = false;
      }
    },
    openSidebar: function(e) {
      document.getElementById("st-container").classList.add("st-menu-open");
      setTimeout(() => {
        this.changes = true;
      }, 500);
    }
  }
};
</script>
<style lang="css" scoped>
*,
*:after,
*::before {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.sidebar-btn {
  position: absolute;
  top: 0;
  left: 0;
  width: 10%;
  /* height: 10%; */
  /* scale: 0.1; */
}

html,
body,
.st-container,
.st-pusher,
.st-content {
  height: 100%;
  overflow-x: scroll;
  overflow-y: scroll;
}

.st-content {
  overflow-y: scroll;
  background: #f3efe0;
}

.st-content,
.st-content-inner {
  position: relative;
}

.st-container {
  position: relative;
  overflow: hidden;
}

.st-pusher {
  position: relative;
  left: 0;
  z-index: 99;
  height: 100%;
  perspective: 1000px;
  -webkit-transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
}

.st-pusher::after {
  position: absolute;
  top: 0;
  right: 0;
  width: 0;
  height: 0;
  background: rgba(0, 0, 0, 0.2);
  content: "";
  opacity: 0;
  -webkit-transition: opacity 0.5s, width 0.1s 0.5s, height 0.1s 0.5s;
  transition: opacity 0.5s, width 0.1s 0.5s, height 0.1s 0.5s;
}

.sidebar-heading {
  background-color: #48a780;
  padding-bottom: 2em;
}
.st-menu-open .st-pusher::after {
  width: 100%;
  height: 100%;
  opacity: 1;
  -webkit-transition: opacity 0.5s;
  transition: opacity 0.5s;
}

.st-menu {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 100;
  visibility: visible;
  width: 300px;
  height: 100%;
  background: #48a770;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}

.st-menu::after {
  position: absolute;
  top: 0;
  right: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.2);
  content: "";
  opacity: 1;
  -webkit-transition: opacity 0.5s;
  transition: opacity 0.5s;
}

.st-menu-open .st-menu::after {
  width: 0;
  height: 0;
  opacity: 0;
  -webkit-transition: opacity 0.5s, width 0.1s 0.5s, height 0.1s 0.5s;
  transition: opacity 0.5s, width 0.1s 0.5s, height 0.1s 0.5s;
}

/* content style */

.st-menu ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

.st-menu h2 {
  margin: 0;
  padding: 1em;
  color: rgba(0, 0, 0, 0.4);
  text-shadow: 0 0 1px rgba(0, 0, 0, 0.1);
  font-weight: 300;
  font-size: 2em;
}

.st-menu a {
  text-decoration: none;
}

.st-menu h3 {
  margin: 0;

  color: rgba(0, 0, 0, 0.4);
  text-shadow: 0 0 1px rgba(0, 0, 0, 0.1);
  font-weight: 300;
}

.auth--name {
  padding-left: 1em;
  font-size: 2em;
}

.auth--email {
  padding-left: 2em;
  font-size: 1em;
}

::-webkit-scrollbar {
	
    width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #f1f1f1; 
    border-radius:50px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: #31A68F; 
    border-radius:100px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
	width:500px;
    background: #555; 
}

.st-menu ul li a {
  display: block;
  padding: 1em 1em 1em 1.2em;
  outline: none;
  box-shadow: inset 0 -1px rgba(0, 0, 0, 0.2);
  color: #f3efe0;
  text-transform: uppercase;
  text-shadow: 0 0 1px rgba(255, 255, 255, 0.1);
  letter-spacing: 1px;
  font-weight: 400;
  -webkit-transition: background 0.3s, box-shadow 0.3s;
  transition: background 0.3s, box-shadow 0.3s;
}

.st-menu ul li:first-child a {
  box-shadow: inset 0 -1px rgba(0, 0, 0, 0.2), inset 0 1px rgba(0, 0, 0, 0.2);
}

.st-menu ul li a:hover {
  background: rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 -1px rgba(0, 0, 0, 0);
  color: #fff;
}

.st-menu ul {
  height: 60vh;
  border-top: 0.1px solid #fff;
  border-bottom: 0.1px solid #fff;
  border-left: none;
  border-right: none;
  overflow-y: scroll;
  right: 17px;
}
.st-effect.st-container {
  -webkit-perspective: 1500px;
  perspective: 1500px;
}

.st-effect .st-pusher {
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

.st-effect.st-menu-open .st-pusher {
  -webkit-transform: translate3d(100px, 0, -600px) rotateY(-20deg);
  transform: translate3d(100px, 0, -600px) rotateY(-20deg);
}

.st-effect.st-menu {
  opacity: 1;
  -webkit-transform: translate3d(-100%, 0, 0);
  transform: translate3d(-100%, 0, 0);
}

.st-effect.st-menu-open .st-effect.st-menu {
  visibility: visible;
  -webkit-transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}

.st-effect.st-menu::after {
  display: none;
}
</style>


