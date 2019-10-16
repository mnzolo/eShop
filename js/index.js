let isDown = false,
				startX,
				scrollLeft;

			this.eventListener(node, 'mousedown', function(e) {
				isDown = true;
				startX = e.pageX - node.offsetLeft;
				scrollLeft = node.scrollLeft;
			});

			this.eventListener(node, 'mouseleave', function() {
				isDown = false;
			});

			this.eventListener(node, 'mouseup', function() {
				isDown = false;
			});

			this.eventListener(node, 'mousemove', function(e) {
				if (isDown === true) {
					e.preventDefault();
					const x = e.pageX - node.offsetLeft,
						  jump = (x - startX) * 1;
					node.scrollLeft = scrollLeft - jump;
				}
			});
