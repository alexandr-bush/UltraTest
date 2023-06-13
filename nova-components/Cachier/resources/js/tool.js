Nova.booting((Vue, router, store) => {
  router.addRoutes([
    {
      name: 'cachier',
      path: '/cachier',
      component: require('./components/Tool').default,
    },
  ])
})
