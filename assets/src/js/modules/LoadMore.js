class LoadMore {
  constructor() {
    this.loadMoreButton = document.querySelector('#load-more');
    this.currentPage = 1;
    this.events();
  }

  events() {
    if (this.loadMoreButton) {
      this.loadMoreButton.addEventListener('click', () => this.loadMore());
    }
  }

  loadMore() {
    this.currentPage++;
    let currentPage = this.currentPage;

    jQuery.ajax({
      type: 'POST',
      url: '/wp-admin/admin-ajax.php',
      dataType: 'json',
      data: {
        action: 'load_more_posts',
        paged: currentPage,
      },
      success: function (res) {
        if (currentPage >= res.max) {
          document.querySelector('.load-more').style.display = 'none';
        }
        let postPlaceholder = document.createElement('article');
        postPlaceholder.innerHTML = res.html;
        let posts = [...postPlaceholder.children];
        posts.forEach((post) => {
          document.querySelector('.post-list__wrapper').append(post);
          setTimeout(() => {
            post.querySelector('.post-card').classList.add('loaded');
          }, 100);
        });
      },
    });
  }
}

export default LoadMore;
