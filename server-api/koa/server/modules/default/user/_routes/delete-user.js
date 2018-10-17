'use strict'

import Router from 'koa-trie-router'
import controller from '../controllers/delete-user'

const router = new Router()

export default () => {
  router.del('/', async (ctx, next) => {
    let result
    try {
      result = await controller(ctx, next)
    } catch (err) {
      // Get the error message and do something.
      // console.log(err.message)

      // Throw the error.
      ctx.throw(500, err)
    }
    ctx.type = 'json'
    ctx.body = result
  })
  return router.middleware()
}
